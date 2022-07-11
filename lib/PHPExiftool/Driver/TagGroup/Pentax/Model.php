<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{

  protected string $id = 'Pentax:Model';

  protected string $name = 'Model';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Model Name',
    'fr' => 'Modèle d\'appareil photo',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Junk
       * line : 288648
       * type : string
       * writable : false
       * count : 32
       * flags : Permanent
       */
      'id' => 'Pentax::Junk.Pentax:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::Junk2
       * line : 288688
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Pentax::Junk2.Pentax:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::Main
       * line : 301236
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    3 => [
      /**
       * table_name : Pentax::PENT
       * line : 301305
       * type : string
       * writable : false
       * count : 24
       * flags : Permanent
       */
      'id' => 'Pentax::PENT.Pentax:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
  ];

}
