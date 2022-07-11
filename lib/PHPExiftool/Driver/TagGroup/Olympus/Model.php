<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{

  protected string $id = 'Olympus:Model';

  protected string $name = 'Model';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Camera Model Name',
    'fr' => 'Modèle d\'appareil photo',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::AVI
       * line : 249776
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Olympus::AVI.Olympus:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    1 => [
      /**
       * table_name : Olympus::DSS
       * line : 253363
       * type : string
       * writable : false
       * count : 16
       * flags : Permanent
       */
      'id' => 'Olympus::DSS.Olympus:Model',
      'desc' => [
        'en' => 'Model',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    2 => [
      /**
       * table_name : Olympus::MOV1
       * line : 255971
       * type : string
       * writable : false
       * count : 8
       * flags : Permanent
       */
      'id' => 'Olympus::MOV1.Olympus:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    3 => [
      /**
       * table_name : Olympus::MOV2
       * line : 256953
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Olympus::MOV2.Olympus:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    4 => [
      /**
       * table_name : Olympus::MP4
       * line : 257080
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Olympus::MP4.Olympus:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    5 => [
      /**
       * table_name : Olympus::OLYM
       * line : 259605
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Olympus::OLYM.Olympus:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    6 => [
      /**
       * table_name : Olympus::WAV
       * line : 262554
       * type : string
       * writable : false
       * count : 16
       * flags : Permanent
       */
      'id' => 'Olympus::WAV.Olympus:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    7 => [
      /**
       * table_name : Olympus::prms
       * line : 262686
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Olympus::prms.Olympus:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
  ];

}
