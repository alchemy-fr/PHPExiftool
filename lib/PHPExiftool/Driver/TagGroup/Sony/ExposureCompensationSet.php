<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureCompensationSet extends AbstractTagGroup
{

  protected string $id = 'Sony:ExposureCompensationSet';

  protected string $name = 'ExposureCompensationSet';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Compensation Set',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347044
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ExposureCompensationSet',
      'desc' => [
        'en' => 'Exposure Compensation Set',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348729
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ExposureCompensationSet',
      'desc' => [
        'en' => 'Exposure Compensation Set',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350134
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:ExposureCompensationSet',
      'desc' => [
        'en' => 'Exposure Compensation Set',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361121
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:ExposureCompensationSet',
      'desc' => [
        'en' => 'Exposure Compensation Set',
      ],
    ],
  ];

}
