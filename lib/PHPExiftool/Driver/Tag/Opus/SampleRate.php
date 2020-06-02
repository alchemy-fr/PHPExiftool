<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Opus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class SampleRate extends AbstractTag
{

    protected $Id = 4;

    protected $Name = 'SampleRate';

    protected $FullName = 'Opus::Header';

    protected $GroupName = 'Opus';

    protected $g0 = 'Opus';

    protected $g1 = 'Opus';

    protected $g2 = 'Audio';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Sample Rate';

}
