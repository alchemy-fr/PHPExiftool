<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class NeutralDensityFilter extends AbstractTag
{

    protected $Id = 136;

    protected $Name = 'NeutralDensityFilter';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Neutral Density Filter';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
        '0 2' => array(
            'Id' => '0 2',
            'Label' => 'Off (0 2)',
        ),
        '1 2' => array(
            'Id' => '1 2',
            'Label' => 'On (1 2)',
        ),
    );

}
