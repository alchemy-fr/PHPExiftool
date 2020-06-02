<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\UserData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class LyricsURI extends AbstractTag
{

    protected $Id = 'lrcu';

    protected $Name = 'LyricsURI';

    protected $FullName = 'QuickTime::UserData';

    protected $GroupName = 'UserData';

    protected $g0 = 'QuickTime';

    protected $g1 = 'UserData';

    protected $g2 = 'Video';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Lyrics URI';

}
