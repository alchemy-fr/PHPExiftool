<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage2 extends AbstractTag
{

    protected $Id = 'NCM2';

    protected $Name = 'PreviewImage2';

    protected $FullName = 'Nikon::NCDT';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Video';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Preview Image 2';

    protected $local_g2 = 'Preview';

    protected $flag_Binary = true;

    protected $flag_Permanent = true;

}
