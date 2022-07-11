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
class SequenceNumber extends AbstractTagGroup
{

  protected string $id = 'Sony:SequenceNumber';

  protected string $name = 'SequenceNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sequence Number',
    'fr' => 'Numéro de Séquence',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351587
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:SequenceNumber',
      'desc' => [
        'en' => 'Sequence Number',
        'fr' => 'Numéro de Séquence',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351752
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:SequenceNumber',
      'desc' => [
        'en' => 'Sequence Number',
        'fr' => 'Numéro de Séquence',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::Main
       * line : 359602
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:SequenceNumber',
      'desc' => [
        'en' => 'Sequence Number',
        'fr' => 'Numéro de Séquence',
      ],
    ],
  ];

}
