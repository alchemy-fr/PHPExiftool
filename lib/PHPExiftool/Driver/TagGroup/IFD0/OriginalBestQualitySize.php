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
class OriginalBestQualitySize extends AbstractTagGroup
{

  protected string $id = 'IFD0:OriginalBestQualitySize';

  protected string $name = 'OriginalBestQualitySize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Original Best Quality Size',
  ];

  protected int $count = 2;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120880
       * type : int32u
       * writable : true
       * count : 2
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:OriginalBestQualitySize',
      'desc' => [
        'en' => 'Original Best Quality Size',
      ],
    ],
  ];

}
