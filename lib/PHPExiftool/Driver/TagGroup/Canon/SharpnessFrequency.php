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
class SharpnessFrequency extends AbstractTagGroup
{

  protected string $id = 'Canon:SharpnessFrequency';

  protected string $name = 'SharpnessFrequency';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sharpness Frequency',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1D
       * line : 8062
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1D.Canon:SharpnessFrequency',
      'desc' => [
        'en' => 'Sharpness Frequency',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1D
       * line : 8421
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1D.Canon:SharpnessFrequency',
      'desc' => [
        'en' => 'Sharpness Frequency',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::Processing
       * line : 69497
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Processing.Canon:SharpnessFrequency',
      'desc' => [
        'en' => 'Sharpness Frequency',
      ],
    ],
  ];

}
