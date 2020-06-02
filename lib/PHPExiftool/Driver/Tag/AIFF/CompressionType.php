<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\AIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class CompressionType extends AbstractTag
{

    protected $Id = 9;

    protected $Name = 'CompressionType';

    protected $FullName = 'AIFF::Common';

    protected $GroupName = 'AIFF';

    protected $g0 = 'AIFF';

    protected $g1 = 'AIFF';

    protected $g2 = 'Audio';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Compression Type';

    protected $MaxLength = 4;

    protected $Values = array(
        'ACE2' => array(
            'Id' => 'ACE2',
            'Label' => 'ACE 2-to-1',
        ),
        'ACE8' => array(
            'Id' => 'ACE8',
            'Label' => 'ACE 8-to-3',
        ),
        'ALAW' => array(
            'Id' => 'ALAW',
            'Label' => 'A-law',
        ),
        'G722' => array(
            'Id' => 'G722',
            'Label' => 'G722',
        ),
        'G726' => array(
            'Id' => 'G726',
            'Label' => 'G726',
        ),
        'G728' => array(
            'Id' => 'G728',
            'Label' => 'G728',
        ),
        'GSM ' => array(
            'Id' => 'GSM ',
            'Label' => 'GSM',
        ),
        'MAC3' => array(
            'Id' => 'MAC3',
            'Label' => 'MAC 3-to-1',
        ),
        'MAC6' => array(
            'Id' => 'MAC6',
            'Label' => 'MAC 6-to-1',
        ),
        'NONE' => array(
            'Id' => 'NONE',
            'Label' => 'None',
        ),
        'ULAW' => array(
            'Id' => 'ULAW',
            'Label' => 'Mu-law',
        ),
        'alaw' => array(
            'Id' => 'alaw',
            'Label' => 'a-law',
        ),
        'sowt' => array(
            'Id' => 'sowt',
            'Label' => 'Little-endian, no compression',
        ),
        'ulaw' => array(
            'Id' => 'ulaw',
            'Label' => 'mu-law',
        ),
    );

}
