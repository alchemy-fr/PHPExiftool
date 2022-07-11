<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalDefaultCropSize extends AbstractTagGroup
{

  protected string $id = 'IFD0:OriginalDefaultCropSize';

  protected string $name = 'OriginalDefaultCropSize';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Original Default Crop Size',
  ];

  protected int $count = 2;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120884
       * type : rational64u
       * writable : true
       * count : 2
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:OriginalDefaultCropSize',
      'desc' => [
        'en' => 'Original Default Crop Size',
      ],
    ],
  ];

}
