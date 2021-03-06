<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MediaJukebox;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Date extends AbstractTag
{

    protected $Id = 'Date';

    protected $Name = 'Date';

    protected $FullName = 'JPEG::MediaJukebox';

    protected $GroupName = 'MediaJukebox';

    protected $g0 = 'XML';

    protected $g1 = 'MediaJukebox';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Date';

    protected $local_g2 = 'Time';

}
