<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BeatSpliceParamsRiseInTimeDuration extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:BeatSpliceParamsRiseInTimeDuration';

  protected string $name = 'BeatSpliceParamsRiseInTimeDuration';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Beat Splice Params Rise In Time Duration',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413300
       * type : struct
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:BeatSpliceParamsRiseInTimeDuration',
      'desc' => [
        'en' => 'Beat Splice Params Rise In Time Duration',
      ],
    ],
  ];

}
