<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsFluorescentN extends AbstractTagGroup
{

  protected string $id = 'Nikon:WB_RGGBLevelsFluorescentN';

  protected string $name = 'WB_RGGBLevelsFluorescentN';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGGB Levels Fluorescent N',
    'fr' => 'Niveaux BB RVVB fluo N',
  ];

  protected int $count = 4;

  protected int $flags = 20;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ColorBalanceC
       * line : 192495
       * type : int32u
       * writable : true
       * count : 4
       * flags : Permanent,Unsafe
       */
      'id' => 'Nikon::ColorBalanceC.Nikon:WB_RGGBLevelsFluorescentN',
      'desc' => [
        'en' => 'WB RGGB Levels Fluorescent N',
        'fr' => 'Niveaux BB RVVB fluo N',
      ],
    ],
  ];

}
