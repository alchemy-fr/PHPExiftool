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
class CropHiSpeed extends AbstractTagGroup
{

  protected string $id = 'Nikon:CropHiSpeed';

  protected string $name = 'CropHiSpeed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Crop Hi Speed',
  ];

  protected int $count = 7;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197184
       * type : int16u
       * writable : true
       * count : 7
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:CropHiSpeed',
      'desc' => [
        'en' => 'Crop Hi Speed',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203522
       * type : int16u
       * writable : true
       * count : 7
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:CropHiSpeed',
      'desc' => [
        'en' => 'Crop Hi Speed',
      ],
    ],
  ];

}
