<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPDwc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class MachineObservationEarliestDate extends AbstractTag
{

    protected $Id = 'MachineObservationEarliestDate';

    protected $Name = 'MachineObservationEarliestDate';

    protected $FullName = 'DarwinCore::Main';

    protected $GroupName = 'XMP-dwc';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-dwc';

    protected $g2 = 'Other';

    protected $Type = 'date';

    protected $Writable = true;

    protected $Description = 'Machine Observation Earliest Date';

    protected $local_g2 = 'Time';

}
