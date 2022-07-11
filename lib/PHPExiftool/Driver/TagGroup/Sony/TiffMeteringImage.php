<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TiffMeteringImage extends AbstractTagGroup
{

  protected string $id = 'Sony:TiffMeteringImage';

  protected string $name = 'TiffMeteringImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tiff Metering Image',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::FocusInfo
       * line : 353781
       * type : undef
       * writable : false
       * count : 9600
       * flags : Permanent
       */
      'id' => 'Sony::FocusInfo.Sony:TiffMeteringImage',
      'desc' => [
        'en' => 'Tiff Metering Image',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::MoreInfo
       * line : 360095
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreInfo.Sony:TiffMeteringImage',
      'desc' => [
        'en' => 'Tiff Metering Image',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Tag940e
       * line : 391367
       * type : undef
       * writable : false
       * count : 2640
       * flags : Permanent
       */
      'id' => 'Sony::Tag940e.Sony:TiffMeteringImage',
      'desc' => [
        'en' => 'Tiff Metering Image',
      ],
    ],
  ];

}
