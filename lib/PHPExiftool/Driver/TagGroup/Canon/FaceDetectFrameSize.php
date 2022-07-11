<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FaceDetectFrameSize extends AbstractTagGroup
{

  protected string $id = 'Canon:FaceDetectFrameSize';

  protected string $name = 'FaceDetectFrameSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face Detect Frame Size',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::FaceDetect1
       * line : 63281
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Canon::FaceDetect1.Canon:FaceDetectFrameSize',
      'desc' => [
        'en' => 'Face Detect Frame Size',
      ],
    ],
  ];

}
