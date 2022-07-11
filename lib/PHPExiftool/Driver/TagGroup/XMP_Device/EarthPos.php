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
class EarthPos extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:EarthPos';

  protected string $name = 'EarthPos';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Earth Pos',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 397033
       * type : struct
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::Device.XMP-Device:EarthPos',
      'desc' => [
        'en' => 'Earth Pos',
      ],
    ],
  ];

}
