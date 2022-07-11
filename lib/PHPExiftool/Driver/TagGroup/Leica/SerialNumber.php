<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SerialNumber extends AbstractTagGroup
{

  protected string $id = 'Leica:SerialNumber';

  protected string $name = 'SerialNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Serial Number',
    'fr' => 'Numéro de série',
  ];

  protected int $count = 8;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica2
       * line : 274679
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica2.Leica:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Leica5
       * line : 275128
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica5.Leica:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::SerialInfo
       * line : 279242
       * type : string
       * writable : false
       * count : 8
       * flags : Permanent
       */
      'id' => 'Panasonic::SerialInfo.Leica:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
    3 => [
      /**
       * table_name : Panasonic::Subdir
       * line : 279728
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Subdir.Leica:SerialNumber',
      'desc' => [
        'en' => 'Serial Number',
        'fr' => 'Numéro de série',
      ],
    ],
  ];

}
