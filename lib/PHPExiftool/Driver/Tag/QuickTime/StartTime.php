<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class StartTime extends AbstractTag
{

    protected $Id = 'sttm';

    protected $Name = 'StartTime';

    protected $FullName = 'QuickTime::Pittasoft';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Other';

    protected $Type = 'int64u';

    protected $Writable = false;

    protected $Description = 'Start Time';

    protected $local_g2 = 'Time';

}
