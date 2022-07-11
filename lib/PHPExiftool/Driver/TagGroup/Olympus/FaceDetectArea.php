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
class FaceDetectArea extends AbstractTagGroup
{

  protected string $id = 'Olympus:FaceDetectArea';

  protected string $name = 'FaceDetectArea';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face Detect Area',
  ];

  protected int $count = 0;

  protected int $flags = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::ImageProcessing
       * line : 255894
       * type : int16s
       * writable : true
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'Olympus::ImageProcessing.Olympus:FaceDetectArea',
      'desc' => [
        'en' => 'Face Detect Area',
      ],
    ],
  ];

}
