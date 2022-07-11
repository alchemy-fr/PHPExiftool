<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CBOR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Relationship extends AbstractTagGroup
{

  protected string $id = 'CBOR:Relationship';

  protected string $name = 'Relationship';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Relationship',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CBOR::Main
       * line : 3773
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'CBOR::Main.CBOR:Relationship',
      'desc' => [
        'en' => 'Relationship',
      ],
    ],
  ];

}
