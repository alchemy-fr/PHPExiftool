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
class BeatSpliceParamsRiseInTimeDurationScale extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:BeatSpliceParamsRiseInTimeDurationScale';

  protected string $name = 'BeatSpliceParamsRiseInTimeDurationScale';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Beat Splice Params Rise In Time Duration Scale',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413303
       * type : rational
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:BeatSpliceParamsRiseInTimeDurationScale',
      'desc' => [
        'en' => 'Beat Splice Params Rise In Time Duration Scale',
      ],
    ],
  ];

}
