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
class EVSteps extends AbstractTagGroup
{

  protected string $id = 'Pentax:EVSteps';

  protected string $name = 'EVSteps';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'EV Steps',
    'fr' => 'Pas IL',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::CameraSettings
       * line : 284854
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::CameraSettings.Pentax:EVSteps',
      'desc' => [
        'en' => 'EV Steps',
        'fr' => 'Pas IL',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::EVStepInfo
       * line : 285914
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::EVStepInfo.Pentax:EVSteps',
      'desc' => [
        'en' => 'EV Steps',
        'fr' => 'Pas IL',
      ],
    ],
  ];

}
