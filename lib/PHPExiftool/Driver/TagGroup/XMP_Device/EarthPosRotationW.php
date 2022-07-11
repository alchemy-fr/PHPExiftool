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
class EarthPosRotationW extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:EarthPosRotationW';

  protected string $name = 'EarthPosRotationW';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Earth Pos Rotation W',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 397045
       * type : real
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::Device.XMP-Device:EarthPosRotationW',
      'desc' => [
        'en' => 'Earth Pos Rotation W',
      ],
    ],
  ];

}
