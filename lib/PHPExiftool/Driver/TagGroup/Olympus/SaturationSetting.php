<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SaturationSetting extends AbstractTagGroup
{

  protected string $id = 'Olympus:SaturationSetting';

  protected string $name = 'SaturationSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Saturation Setting',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawInfo
       * line : 261539
       * type : int16s
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Olympus::RawInfo.Olympus:SaturationSetting',
      'desc' => [
        'en' => 'Saturation Setting',
      ],
    ],
  ];

}
