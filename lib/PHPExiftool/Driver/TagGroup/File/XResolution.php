<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XResolution extends AbstractTagGroup
{

  protected string $id = 'File:XResolution';

  protected string $name = 'XResolution';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'X Resolution',
    'fr' => 'Résolution d\'image horizontale',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121932
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:XResolution',
      'desc' => [
        'en' => 'X Resolution',
        'fr' => 'Résolution d\'image horizontale',
      ],
    ],
    1 => [
      /**
       * table_name : PCX::Main
       * line : 264283
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PCX::Main.File:XResolution',
      'desc' => [
        'en' => 'X Resolution',
        'fr' => 'Résolution d\'image horizontale',
      ],
    ],
  ];

}
