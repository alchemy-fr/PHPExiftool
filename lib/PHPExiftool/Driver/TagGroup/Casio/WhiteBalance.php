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
class WhiteBalance extends AbstractTagGroup
{

  protected string $id = 'Casio:WhiteBalance';

  protected string $name = 'WhiteBalance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'White Balance',
    'fr' => 'Balance des blancs',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Casio::Main
       * line : 84436
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Main.Casio:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
    1 => [
      /**
       * table_name : Casio::Type2
       * line : 85394
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
    2 => [
      /**
       * table_name : Casio::Type2
       * line : 85782
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Casio::Type2.Casio:WhiteBalance',
      'desc' => [
        'en' => 'White Balance',
        'fr' => 'Balance des blancs',
      ],
    ],
  ];

}
