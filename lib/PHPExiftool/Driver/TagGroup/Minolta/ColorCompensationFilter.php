<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorCompensationFilter extends AbstractTagGroup
{

  protected string $id = 'Minolta:ColorCompensationFilter';

  protected string $name = 'ColorCompensationFilter';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Compensation Filter',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 181820
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ColorCompensationFilter',
      'desc' => [
        'en' => 'Color Compensation Filter',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 182804
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:ColorCompensationFilter',
      'desc' => [
        'en' => 'Color Compensation Filter',
      ],
    ],
    2 => [
      /**
       * table_name : Minolta::Main
       * line : 185112
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:ColorCompensationFilter',
      'desc' => [
        'en' => 'Color Compensation Filter',
      ],
    ],
  ];

}
