<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\APE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Duration extends AbstractTag
{

    protected $Id = 'DURATION';

    protected $Name = 'Duration';

    protected $FullName = 'APE::Main';

    protected $GroupName = 'APE';

    protected $g0 = 'APE';

    protected $g1 = 'APE';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Duration';

}
