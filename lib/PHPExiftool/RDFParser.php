<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool;

use DOMDocument;
use DOMElement;
use DOMNode;
use DOMNodeList;
use DOMXPath;
use PHPExiftool\Driver\TagGroupInterface;
use PHPExiftool\Driver\TagGroupFactory;
use PHPExiftool\Driver\Metadata\Metadata;
use PHPExiftool\Driver\Metadata\MetadataBag;
use PHPExiftool\Driver\Value\Binary;
use PHPExiftool\Driver\Value\Mono;
use PHPExiftool\Driver\Value\Multi;
use PHPExiftool\Driver\Value\ValueInterface;
use PHPExiftool\Exception\LogicException;
use PHPExiftool\Exception\ParseErrorException;
use PHPExiftool\Exception\RuntimeException;
use PHPExiftool\Exception\TagUnknown;
use Doctrine\Common\Collections\ArrayCollection;
use Psr\Log\LoggerInterface;

/**
 * Exiftool RDF output Parser
 *
 * @author      Romain Neutron <imprec@gmail.com>
 */
class RDFParser
{
    /**
     * RDF Namespace
     */
    const RDF_NAMESPACE = 'http://www.w3.org/1999/02/22-rdf-syntax-ns#';

    protected ?string $XML = null;
    protected ?DOMDocument $DOM = null;
    protected ?DOMXPath $DOMXpath = null;
    protected array $registeredPrefixes = [];
    private LoggerInterface $logger;
    private string $classesRootDirectory;

    public function __construct(string $classesRootDirectory, LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->classesRootDirectory = $classesRootDirectory;
    }
    
    public function __destruct()
    {
        $this->close();
    }

    /**
     * Opens an XML file for parsing
     *
     * @param string $XML
     * @return RDFParser
     */
    public function open(string $XML): self
    {
        $this->close();

        $this->XML = $XML;

        return $this;
    }

    /**
     * Close the current opened XML file and reset internals
     *
     * @return RDFParser
     */
    public function close(): self
    {
        $this->XML = null;
        $this->DOMXpath = null;
        $this->DOM = null;
        $this->registeredPrefixes = [];

        return $this;
    }

    /**
     * Parse an XML string and returns an ArrayCollection of FileEntity
     *
     * @return ArrayCollection
     * @throws ParseErrorException
     */
    public function ParseEntities(): ArrayCollection
    {
        /**
         * A default Exiftool XML can contains many RDF Descriptions
         */
        $Entities = new ArrayCollection();

        $this->logger->debug(sprintf("ParseEntities() :: searching '/rdf:RDF/rdf:Description' ..."));
        /** @var DOMNode $node */
        foreach ($this->getDomXpath()->query('/rdf:RDF/rdf:Description') as $node) {
            $this->logger->debug(sprintf("  -> found node \"%s\" line %d", $node->nodeName, $node->getLineNo()));

            /**
             * Let's create a DOMDocument containing a single RDF result
             */
            $Dom = new DOMDocument();

            $DomRootElement = $Dom->createElementNS(self::RDF_NAMESPACE, 'rdf:RDF');
            $DomRootElement->appendChild($Dom->importNode($node, true));

            $Dom->appendChild($DomRootElement);

            $LocalXpath = new DOMXPath($Dom);
            $LocalXpath->registerNamespace('rdf', self::RDF_NAMESPACE);


            $RDFDescriptionRoot = $LocalXpath->query('/rdf:RDF/rdf:Description');

            /**
             * Let's associate a Description to the corresponding file
             */
            /** @var DOMElement $node */
            $node = $RDFDescriptionRoot->item(0);
            $file = $node->getAttribute('rdf:about');

            $Entities->set($file, new FileEntity($file, $Dom, new static($this->classesRootDirectory, $this->logger)));

            $this->logger->debug(sprintf("  -> new dom node \"%s\" line %d associated to file \"%s\"", $node->nodeName, $node->getLineNo(), $file));
        }

        return $Entities;
    }

    /**
     * Parse an Entity associated DOM, returns the metadatas
     *
     * @return MetadataBag
     * @throws TagUnknown|ParseErrorException
     */
    public function ParseMetadatas(): MetadataBag
    {
        $this->logger->debug(sprintf("ParseMetadatas() :: searching '/rdf:RDF/rdf:Description/*' ..."));

        $nodes = $this->getDomXpath()->query('/rdf:RDF/rdf:Description/*');

        $metadatas = new MetadataBag();

        /** @var DOMNode $node */
        foreach ($nodes as $node) {

            $tagname = $this->normalize($node->nodeName);

            $this->logger->debug(sprintf("  -> found node \"%s\" line %d -> tagname = \"%s\"", $node->nodeName, $node->getLineNo(), $tagname));

            try {
                $tagGroup = TagGroupFactory::getFromRDFTagname($this->classesRootDirectory, $tagname, $this->logger);
                $this->logger->debug(sprintf("    -> tagGroup class = \"%s\"", get_class($tagGroup)));
            }
            catch (TagUnknown $e) {
                $this->logger->debug(sprintf("    -> \"%s\", ignored", $e->getMessage()));
                continue;
            }

            $metaValue = $this->readNodeValue($node, $tagGroup);

            $metadata = new Metadata($tagGroup, $metaValue);

            $metadatas->set($tagname, $metadata);
        }

        return $metadatas;
    }

    /**
     * Returns the first result for a user defined query against the RDF
     *
     * @param string $query
     * @return ?ValueInterface The value
     * @throws TagUnknown|ParseErrorException
     */
    public function Query(string $query): ?ValueInterface
    {
        $QueryParts = explode(':', $query);

        $DomXpath = $this->getDomXpath();

        if (!in_array($QueryParts[0], $this->registeredPrefixes)) {
            return null;
        }

        $nodes = $DomXpath->query('/rdf:RDF/rdf:Description/' . $query);

        if ($nodes instanceof DOMNodeList && $nodes->length > 0) {
            /** @var DOMElement $node */
            $node = $nodes->item(0);
            return $this->readNodeValue($node);
        }

        return null;
    }

    /**
     * Normalize a tagname based on namespaces redirections
     *
     * @param string $tagname The tagname to normalize
     * @return string The normalized tagname
     */
    protected function normalize(string $tagname): string
    {
        static $namespacesRedirection = [
            'CIFF' => ['Canon', 'CanonRaw'],
        ];

        foreach ($namespacesRedirection as $from => $to) {
            if (strpos($tagname, $from . ':') !== 0) {
                continue;
            }

            foreach ((array)$to as $substit) {
                $supposedTagname = str_replace($from . ':', $substit . ':', $tagname);

                if (TagGroupFactory::hasFromRDFTagname($this->classesRootDirectory, $supposedTagname, $this->logger)) {
                    return $supposedTagname;
                }
            }
        }

        return $tagname;
    }

    /**
     * Extract all XML namespaces declared in a XML
     *
     * @param DOMDocument $dom
     * @return array        The namespaces declared in XML
     */
    protected static function getNamespacesFromXml(DOMDocument $dom): array
    {
        $namespaces = [];

        $XML = $dom->saveXML();

        $pattern = "(xmlns:([a-zA-Z-_0-9]+)=['|\"]{1}(https?:[/{2,4}|\\{2,4}][\w:#%/;$()~_?/\-=\\\.&]*)['|\"]{1})";

        preg_match_all($pattern, $XML, $matches, PREG_PATTERN_ORDER);

        foreach ($matches[2] as $key => $value) {
            $namespaces[$matches[1][$key]] = $value;
        }

        return $namespaces;
    }

    /**
     * Read the node value, decode it if needed
     *
     * @param DOMElement $node        The node to read
     * @param ?TagGroupInterface $tag The tag associated
     * @return ValueInterface The value extracted
     * @throws TagUnknown
     */

// <Sigma:Shadow et:id='14' et:table='Sigma::Main' et:index='1'>-1.1</Sigma:Shadow>
// <IPTC:Keywords et:id='25' et:table='IPTC::ApplicationRecord'>
    protected function readNodeValue(DOMElement $node, ?TagGroupInterface $tagGroup = null)
    {
        $nodeName = $this->normalize($node->nodeName);

        if (is_null($tagGroup) && TagGroupFactory::hasFromRDFTagname($this->classesRootDirectory, $nodeName, $this->logger)) {
            $tagGroup = TagGroupFactory::getFromRDFTagname($this->classesRootDirectory, $nodeName, $this->logger);
        }

        if ($node->getElementsByTagNameNS(self::RDF_NAMESPACE, 'Bag')->length > 0) {

            $ret = [];

            foreach ($node->getElementsByTagNameNS(self::RDF_NAMESPACE, 'li') as $nodeElement) {
                $ret[] = $nodeElement->nodeValue;
            }

            if (is_null($tagGroup) || $tagGroup->isMulti()) {
                return new Multi($ret);
            }
            else {
                return new Mono(implode(' ', $ret));
            }
        }
        elseif ($node->getAttribute('rdf:datatype') === 'http://www.w3.org/2001/XMLSchema#base64Binary') {

            if (is_null($tagGroup) || $tagGroup->isBinary()) {
                return Binary::loadFromBase64(trim($node->nodeValue));
            }
            else {
                return new Mono(base64_decode(trim($node->nodeValue)));
            }
        }
        else {

            if (!is_null($tagGroup) && $tagGroup->isMulti()) {
                return new Multi($node->nodeValue);
            }
            else {
                return new Mono($node->nodeValue);
            }
        }
    }

    /**
     * Compute the DOMDocument from the XML
     *
     * @return ?DOMDocument
     * @throws LogicException
     * @throws ParseErrorException
     */
    protected function getDom(): ?DOMDocument
    {
        if (!$this->XML) {
            throw new LogicException('You must open an XML first');
        }

        if (!$this->DOM) {

            $this->DOM = new DOMDocument;

            /**
             * We shut up the warning to exclude an exception in case Warnings are
             * transformed in exception
             */
            if (!@$this->DOM->loadXML($this->XML)) {
                throw new ParseErrorException('Unable to load XML');
            }
        }

        return $this->DOM;
    }

    /**
     * Compute the DOMXpath from the DOMDocument
     *
     * @return ?DOMXpath        The DOMXpath object related to the XML
     * @throws RuntimeException|ParseErrorException
     */
    protected function getDomXpath(): ?DOMXPath
    {
        if (!$this->DOMXpath) {
            try {
                $this->DOMXpath = new DOMXPath($this->getDom());
            }
            catch (ParseErrorException $e) {
                throw new RuntimeException('Unable to parse the XML');
            }

            $this->DOMXpath->registerNamespace('rdf', self::RDF_NAMESPACE);

            foreach (static::getNamespacesFromXml($this->getDom()) as $prefix => $uri) {
                $this->registeredPrefixes = array_merge($this->registeredPrefixes, (array)$prefix);
                $this->DOMXpath->registerNamespace($prefix, $uri);
            }
        }

        return $this->DOMXpath;
    }
}
