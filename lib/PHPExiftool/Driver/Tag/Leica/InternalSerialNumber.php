<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class InternalSerialNumber extends AbstractTag
{

    protected $Id = 1280;

    protected $Name = 'InternalSerialNumber';

    protected $FullName = 'Panasonic::Leica5';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Internal Serial Number';

    protected $flag_Permanent = true;

}
