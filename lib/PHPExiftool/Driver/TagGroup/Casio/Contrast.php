<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Contrast extends AbstractTagGroup
{

  protected string $id = 'Casio:Contrast';

  protected string $name = 'Contrast';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Contrast',
    'fr' => 'Contraste',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Casio::Main
       * line : 84701
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Main.Casio:Contrast',
      'desc' => [
        'en' => 'Contrast',
        'fr' => 'Contraste',
      ],
    ],
    1 => [
      /**
       * table_name : Casio::Type2
       * line : 85609
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:Contrast',
      'desc' => [
        'en' => 'Contrast',
        'fr' => 'Contraste',
      ],
    ],
    2 => [
      /**
       * table_name : Casio::Type2
       * line : 89499
       * type : undef
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:Contrast',
      'desc' => [
        'en' => 'Contrast',
        'fr' => 'Contraste',
      ],
    ],
  ];

}
