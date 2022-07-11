<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensitivitySteps extends AbstractTagGroup
{

  protected string $id = 'Pentax:SensitivitySteps';

  protected string $name = 'SensitivitySteps';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sensitivity Steps',
    'fr' => 'Pas de sensibilité',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::CameraSettings
       * line : 285584
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::CameraSettings.Pentax:SensitivitySteps',
      'desc' => [
        'en' => 'Sensitivity Steps',
        'fr' => 'Pas de sensibilité',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::CameraSettings
       * line : 285836
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::CameraSettings.Pentax:SensitivitySteps',
      'desc' => [
        'en' => 'Sensitivity Steps',
        'fr' => 'Pas de sensibilité',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::EVStepInfo
       * line : 285938
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::EVStepInfo.Pentax:SensitivitySteps',
      'desc' => [
        'en' => 'Sensitivity Steps',
        'fr' => 'Pas de sensibilité',
      ],
    ],
  ];

}
