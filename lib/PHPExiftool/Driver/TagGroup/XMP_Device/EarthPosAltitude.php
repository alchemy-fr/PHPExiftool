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
class EarthPosAltitude extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:EarthPosAltitude';

  protected string $name = 'EarthPosAltitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Earth Pos Altitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 397036
       * type : real
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::Device.XMP-Device:EarthPosAltitude',
      'desc' => [
        'en' => 'Earth Pos Altitude',
      ],
    ],
  ];

}
