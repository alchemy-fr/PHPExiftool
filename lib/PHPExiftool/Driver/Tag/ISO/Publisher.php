<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ISO;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Publisher extends AbstractTag
{

    protected $Id = 318;

    protected $Name = 'Publisher';

    protected $FullName = 'ISO::PrimaryVolume';

    protected $GroupName = 'ISO';

    protected $g0 = 'ISO';

    protected $g1 = 'ISO';

    protected $g2 = 'Other';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Publisher';

    protected $MaxLength = 128;

}
