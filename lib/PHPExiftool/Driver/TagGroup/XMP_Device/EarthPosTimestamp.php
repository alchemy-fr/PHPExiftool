<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_Device;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EarthPosTimestamp extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:EarthPosTimestamp';

  protected string $name = 'EarthPosTimestamp';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Earth Pos Timestamp',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 397057
       * type : integer
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::Device.XMP-Device:EarthPosTimestamp',
      'desc' => [
        'en' => 'Earth Pos Timestamp',
      ],
    ],
  ];

}
