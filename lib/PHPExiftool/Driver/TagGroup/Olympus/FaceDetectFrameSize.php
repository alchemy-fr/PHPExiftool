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
class FaceDetectFrameSize extends AbstractTagGroup
{

  protected string $id = 'Olympus:FaceDetectFrameSize';

  protected string $name = 'FaceDetectFrameSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face Detect Frame Size',
  ];

  protected int $count = 6;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::ImageProcessing
       * line : 255904
       * type : int16u
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Olympus::ImageProcessing.Olympus:FaceDetectFrameSize',
      'desc' => [
        'en' => 'Face Detect Frame Size',
      ],
    ],
  ];

}
