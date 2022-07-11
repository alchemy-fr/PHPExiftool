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
class ColorCompensationFilterSet extends AbstractTagGroup
{

  protected string $id = 'Sony:ColorCompensationFilterSet';

  protected string $name = 'ColorCompensationFilterSet';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Compensation Filter Set',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 347179
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ColorCompensationFilterSet',
      'desc' => [
        'en' => 'Color Compensation Filter Set',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings2
       * line : 348788
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings2.Sony:ColorCompensationFilterSet',
      'desc' => [
        'en' => 'Color Compensation Filter Set',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 350909
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:ColorCompensationFilterSet',
      'desc' => [
        'en' => 'Color Compensation Filter Set',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360778
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:ColorCompensationFilterSet',
      'desc' => [
        'en' => 'Color Compensation Filter Set',
      ],
    ],
  ];

}
