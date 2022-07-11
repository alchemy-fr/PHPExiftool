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
class Encoding extends AbstractTagGroup
{

  protected string $id = 'File:Encoding';

  protected string $name = 'Encoding';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Encoding',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIF::Main
       * line : 122456
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIF::Main.File:Encoding',
      'desc' => [
        'en' => 'Encoding',
      ],
    ],
    1 => [
      /**
       * table_name : PCX::Main
       * line : 264224
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PCX::Main.File:Encoding',
      'desc' => [
        'en' => 'Encoding',
      ],
    ],
  ];

}
