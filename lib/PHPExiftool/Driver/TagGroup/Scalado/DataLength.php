<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Scalado;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DataLength extends AbstractTagGroup
{

  protected string $id = 'Scalado:DataLength';

  protected string $name = 'DataLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Data Length',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Scalado::Main
       * line : 337286
       * type : int32s
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Scalado::Main.Scalado:DataLength',
      'desc' => [
        'en' => 'Data Length',
      ],
    ],
  ];

}
