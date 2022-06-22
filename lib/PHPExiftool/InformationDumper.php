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
use PHPExiftool\Exception\InvalidArgumentException;

class InformationDumper
{
    /**
     * For use with list option
     */
    const LISTTYPE_WRITABLE          = 'w';
    /**
     * For use with list option
     */
    const LISTTYPE_SUPPORTED_FILEEXT = 'f';
    /**
     * For use with list option
     */
    const LISTTYPE_WRITABLE_FILEEXT  = 'wf';
    /**
     * For use with list option
     */
    const LISTTYPE_SUPPORTED_XML     = 'x';
    /**
     * For use with list option
     */
    const LISTTYPE_DELETABLE_GROUPS  = 'd';
    /**
     * For use with list option
     */
    const LISTTYPE_GROUPS            = 'g';

    const LISTOPTION_MWG             = '-use MWG';

    private Exiftool $exiftool;

    public function __construct(Exiftool $exiftool)
    {
        $this->exiftool = $exiftool;
    }

    /**
     * Return the result of an Exiftool -list* command
     *
     * @see http://www.sno.phy.queensu.ca/~phil/exiftool/exiftool_pod.html#item__2dlist_2c__2dlistw_2c__2dlistf_2c__2dlistr_2c__2d
     * @param string $type One of the LISTTYPE_* constants
     * @param array $options
     * @return DOMDocument
     * @throws Exception
     */
    public function listDatas(string $type = self::LISTTYPE_SUPPORTED_XML, array $options=array()): DOMDocument
    {
        if ( ! is_array($options)) {
            throw new InvalidArgumentException('options must be an array');
        }

        $available = array(
            self::LISTTYPE_WRITABLE, self::LISTTYPE_SUPPORTED_FILEEXT
            , self::LISTTYPE_WRITABLE_FILEEXT, self::LISTTYPE_SUPPORTED_XML
            , self::LISTTYPE_DELETABLE_GROUPS, self::LISTTYPE_GROUPS,
        );

        if ( ! in_array($type, $available)) {
            throw new InvalidArgumentException('Unknown list attribute');
        }

        $command = [];
        $available = [self::LISTOPTION_MWG];
        foreach($options as $option) {
            if ( ! in_array($option, $available)) {
                throw new InvalidArgumentException('Unknown option');
            }
            $command = array_merge($command, explode(' ', $option));
        }
        $command[] = '-f';
        $command[] = '-list' . $type;

        $xml = $this->exiftool->executeCommand($command);
        $dom = new DOMDocument();
        $dom->loadXML($xml,  4194304 /* XML_PARSE_BIG_LINES */);

        return $dom;
    }
}
