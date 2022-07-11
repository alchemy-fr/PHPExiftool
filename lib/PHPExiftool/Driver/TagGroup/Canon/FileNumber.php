<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileNumber extends AbstractTagGroup
{

  protected string $id = 'Canon:FileNumber';

  protected string $name = 'FileNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'File Number',
    'fr' => 'Numéro de fichier',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::FileInfo
       * line : 63374
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::FileInfo.Canon:FileNumber',
      'desc' => [
        'en' => 'File Number',
        'fr' => 'Numéro de fichier',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::FileInfo
       * line : 63384
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::FileInfo.Canon:FileNumber',
      'desc' => [
        'en' => 'File Number',
        'fr' => 'Numéro de fichier',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::Main
       * line : 64576
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:FileNumber',
      'desc' => [
        'en' => 'File Number',
        'fr' => 'Numéro de fichier',
      ],
    ],
  ];

}
