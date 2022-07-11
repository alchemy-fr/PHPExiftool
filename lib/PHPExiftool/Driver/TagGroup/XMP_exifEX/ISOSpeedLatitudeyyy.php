<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exifEX;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISOSpeedLatitudeyyy extends AbstractTagGroup
{

  protected string $id = 'XMP-exifEX:ISOSpeedLatitudeyyy';

  protected string $name = 'ISOSpeedLatitudeyyy';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ISO Speed Latitude yyy',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exifEX
       * line : 408968
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exifEX.XMP-exifEX:ISOSpeedLatitudeyyy',
      'desc' => [
        'en' => 'ISO Speed Latitude yyy',
      ],
    ],
  ];

}
