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
class ISOSpeedLatitudezzz extends AbstractTagGroup
{

  protected string $id = 'XMP-exifEX:ISOSpeedLatitudezzz';

  protected string $name = 'ISOSpeedLatitudezzz';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ISO Speed Latitude zzz',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exifEX
       * line : 408973
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exifEX.XMP-exifEX:ISOSpeedLatitudezzz',
      'desc' => [
        'en' => 'ISO Speed Latitude zzz',
      ],
    ],
  ];

}
