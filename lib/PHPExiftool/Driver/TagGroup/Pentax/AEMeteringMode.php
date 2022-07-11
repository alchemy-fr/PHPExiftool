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
class AEMeteringMode extends AbstractTagGroup
{

  protected string $id = 'Pentax:AEMeteringMode';

  protected string $name = 'AEMeteringMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AE Metering Mode',
    'fr' => 'Mode de mesure AE',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AEInfo
       * line : 283279
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo.Pentax:AEMeteringMode',
      'desc' => [
        'en' => 'AE Metering Mode',
        'fr' => 'Mode de mesure AE',
      ],
    ],
  ];

}
