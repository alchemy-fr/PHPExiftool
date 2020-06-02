<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ProjectionType extends AbstractTag
{

    protected $Id = 30321;

    protected $Name = 'ProjectionType';

    protected $FullName = 'Matroska::Projection';

    protected $GroupName = 'Matroska';

    protected $g0 = 'Matroska';

    protected $g1 = 'Matroska';

    protected $g2 = 'Video';

    protected $Type = 'unsigned';

    protected $Writable = false;

    protected $Description = 'Projection Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Rectangular',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Equirectangular',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Cubemap',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Mesh',
        ),
    );

}
