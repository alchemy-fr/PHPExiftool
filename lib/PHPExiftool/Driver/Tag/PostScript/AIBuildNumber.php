<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\PostScript;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AIBuildNumber extends AbstractTag
{

    protected $Id = 'AI12_BuildNumber';

    protected $Name = 'AIBuildNumber';

    protected $FullName = 'PostScript::Main';

    protected $GroupName = 'PostScript';

    protected $g0 = 'PostScript';

    protected $g1 = 'PostScript';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'AI Build Number';

}
