<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{

  protected string $id = 'Nikon:Model';

  protected string $name = 'Model';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Camera Model Name',
    'fr' => 'Modèle d\'appareil photo',
  ];

  protected int $count = 8;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 191499
       * type : string
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AVITags.Nikon:Model',
      'desc' => [
        'en' => 'Model',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::MOV
       * line : 196675
       * type : string
       * writable : false
       * count : 8
       * flags : Permanent
       */
      'id' => 'Nikon::MOV.Nikon:Model',
      'desc' => [
        'en' => 'Camera Model Name',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::NCTG
       * line : 202474
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:Model',
      'desc' => [
        'en' => 'Model',
        'fr' => 'Modèle d\'appareil photo',
      ],
    ],
  ];

}
