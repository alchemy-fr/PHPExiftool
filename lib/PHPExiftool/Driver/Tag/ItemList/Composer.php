<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ItemList;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Composer extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'Composer';

    protected $FullName = 'QuickTime::ItemList';

    protected $GroupName = 'ItemList';

    protected $g0 = 'QuickTime';

    protected $g1 = 'ItemList';

    protected $g2 = 'Audio';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Composer';

    protected $flag_Avoid = true;

}
