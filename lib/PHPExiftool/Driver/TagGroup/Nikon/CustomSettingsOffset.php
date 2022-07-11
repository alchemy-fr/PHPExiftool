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
class CustomSettingsOffset extends AbstractTagGroup
{

  protected string $id = 'Nikon:CustomSettingsOffset';

  protected string $name = 'CustomSettingsOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Custom Settings Offset',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD500
       * line : 207387
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD500.Nikon:CustomSettingsOffset',
      'desc' => [
        'en' => 'Custom Settings Offset',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD810
       * line : 208961
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD810.Nikon:CustomSettingsOffset',
      'desc' => [
        'en' => 'Custom Settings Offset',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ShotInfoD850
       * line : 209515
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD850.Nikon:CustomSettingsOffset',
      'desc' => [
        'en' => 'Custom Settings Offset',
      ],
    ],
  ];

}
