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
class GripBatteryADNoLoad extends AbstractTagGroup
{

  protected string $id = 'Pentax:GripBatteryADNoLoad';

  protected string $name = 'GripBatteryADNoLoad';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Grip Battery A/D No Load',
    'fr' => 'Tension accu poignée à vide',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::BatteryInfo
       * line : 284216
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::BatteryInfo.Pentax:GripBatteryADNoLoad',
      'desc' => [
        'en' => 'Grip Battery A/D No Load',
        'fr' => 'Tension accu poignée à vide',
      ],
    ],
  ];

}
