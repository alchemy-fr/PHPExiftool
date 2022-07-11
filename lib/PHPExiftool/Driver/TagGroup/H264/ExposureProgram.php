<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureProgram extends AbstractTagGroup
{

  protected string $id = 'H264:ExposureProgram';

  protected string $name = 'ExposureProgram';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Exposure Program',
    'fr' => 'Programme d\'exposition',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : H264::Camera1
       * line : 140472
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::Camera1.H264:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 140750
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.H264:ExposureProgram',
      'desc' => [
        'en' => 'Exposure Program',
        'fr' => 'Programme d\'exposition',
      ],
    ],
  ];

}
