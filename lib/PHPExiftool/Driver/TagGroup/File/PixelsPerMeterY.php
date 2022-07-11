<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PixelsPerMeterY extends AbstractTagGroup
{

  protected string $id = 'File:PixelsPerMeterY';

  protected string $name = 'PixelsPerMeterY';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Pixels Per Meter Y',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3325
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::Main.File:PixelsPerMeterY',
      'desc' => [
        'en' => 'Pixels Per Meter Y',
      ],
    ],
  ];

}
