<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPMicrosoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ItemSubType extends AbstractTag
{

    protected $Id = 'ItemSubType';

    protected $Name = 'ItemSubType';

    protected $FullName = 'Microsoft::XMP';

    protected $GroupName = 'XMP-microsoft';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-microsoft';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Item Sub Type';

}
