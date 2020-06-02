<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FollowMeAnimation extends AbstractTag
{

    protected $Id = 17;

    protected $Name = 'Follow-meAnimation';

    protected $FullName = 'Parrot::FollowMe';

    protected $GroupName = 'Parrot';

    protected $g0 = 'Parrot';

    protected $g1 = 'Parrot';

    protected $g2 = 'Location';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Follow-me Animation';

    protected $local_g2 = 'Device';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Orbit',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Boomerang',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Parabola',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Zenith',
        ),
    );

}
