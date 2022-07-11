<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageProcessingVersion extends AbstractTagGroup
{

  protected string $id = 'Olympus:ImageProcessingVersion';

  protected string $name = 'ImageProcessingVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Processing Version',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::ImageProcessing
       * line : 255490
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Olympus::ImageProcessing.Olympus:ImageProcessingVersion',
      'desc' => [
        'en' => 'Image Processing Version',
      ],
    ],
  ];

}
