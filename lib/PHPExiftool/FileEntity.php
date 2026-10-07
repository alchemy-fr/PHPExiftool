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
use Exception;
use IteratorAggregate;
use PHPExiftool\Driver\Metadata\MetadataBag;
use PHPExiftool\Driver\Value\ValueInterface;


/**
 *
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class FileEntity implements IteratorAggregate
{
    // private DOMDocument $dom;

    private string $file;

    private ?MetadataBag $metadatas = null;

    private RDFParser $parser;

    /**
     * Construct a new FileEntity
     *
     * @param string $file
     * @param DOMDocument $dom
     * @param RDFParser $parser
     * @return FileEntity
     */
    public function __construct(string $file, DOMDocument $dom, RDFParser $parser)
    {
        // $this->dom = $dom;
        $this->file = $file;

        $this->parser = $parser->open($dom->saveXML());

        return $this;
    }

    /**
     * @throws Exception
     */
    public function getIterator(): \Traversable
    {
        return $this->getMetadatas()->getIterator();
    }

    public function getFile(): string
    {
        return $this->file;
    }

    /**
     *
     * @return MetadataBag
     */
    public function getMetadatas(): MetadataBag
    {
        if ($this->metadatas === null) {
            $this->metadatas = $this->parser->ParseMetadatas();
        }

        return $this->metadatas;
    }

    public function getCacheKey(): string
    {
        return urlencode($this->file);    // will encode psr6 reserved chars
    }

    /**
     * Execute a user defined query to retrieve metadata
     *
     * @param string $query
     *
     * @return ValueInterface
     */
    public function executeQuery(string $query): ValueInterface
    {
        return $this->parser->Query($query);
    }

}
