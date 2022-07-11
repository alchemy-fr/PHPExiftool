<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashMasterControlMode extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashMasterControlMode';

  protected string $name = 'FlashMasterControlMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Master Control Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 200373
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashMasterControlMode',
      'desc' => [
        'en' => 'Flash Master Control Mode',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208540
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:FlashMasterControlMode',
      'desc' => [
        'en' => 'Flash Master Control Mode',
      ],
    ],
  ];

}
