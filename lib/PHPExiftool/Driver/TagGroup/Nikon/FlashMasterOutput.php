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
class FlashMasterOutput extends AbstractTagGroup
{

  protected string $id = 'Nikon:FlashMasterOutput';

  protected string $name = 'FlashMasterOutput';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Master Output',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::MenuSettingsZ7II
       * line : 200393
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashMasterOutput',
      'desc' => [
        'en' => 'Flash Master Output',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD6
       * line : 208560
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::ShotInfoD6.Nikon:FlashMasterOutput',
      'desc' => [
        'en' => 'Flash Master Output',
      ],
    ],
  ];

}
