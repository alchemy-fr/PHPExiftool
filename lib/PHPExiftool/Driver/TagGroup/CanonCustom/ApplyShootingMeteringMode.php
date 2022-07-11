<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApplyShootingMeteringMode extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:ApplyShootingMeteringMode';

  protected string $name = 'ApplyShootingMeteringMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Apply Shooting Metering Mode',
    'fr' => 'Appliquer mode de prise de vue/de mesure',
  ];

  protected int $count = 8;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 72839
       * type : int32s
       * writable : true
       * count : 8
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:ApplyShootingMeteringMode',
      'desc' => [
        'en' => 'Apply Shooting Metering Mode',
        'fr' => 'Appliquer mode de prise de vue/de mesure',
      ],
    ],
  ];

}
