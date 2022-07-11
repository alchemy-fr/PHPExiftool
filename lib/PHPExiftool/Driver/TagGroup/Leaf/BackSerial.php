<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BackSerial extends AbstractTagGroup
{

  protected string $id = 'Leaf:BackSerial';

  protected string $name = 'BackSerial';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Back Serial Number',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::Main
       * line : 162239
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::Main.Leaf:BackSerial',
      'desc' => [
        'en' => 'Back Serial Number',
      ],
    ],
  ];

}
