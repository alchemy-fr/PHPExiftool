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
class ImageAdjustment extends AbstractTagGroup
{

  protected string $id = 'Nikon:ImageAdjustment';

  protected string $name = 'ImageAdjustment';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Adjustment',
    'fr' => 'Ajustement Image',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197514
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:ImageAdjustment',
      'desc' => [
        'en' => 'Image Adjustment',
        'fr' => 'Ajustement Image',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::Type2
       * line : 209823
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Type2.Nikon:ImageAdjustment',
      'desc' => [
        'en' => 'Image Adjustment',
        'fr' => 'Ajustement Image',
      ],
    ],
  ];

}
