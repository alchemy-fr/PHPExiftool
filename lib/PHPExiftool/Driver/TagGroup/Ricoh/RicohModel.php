<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RicohModel extends AbstractTagGroup
{

  protected string $id = 'Ricoh:RicohModel';

  protected string $name = 'RicohModel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Ricoh Model',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::Type2
       * line : 334189
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Ricoh::Type2.Ricoh:RicohModel',
      'desc' => [
        'en' => 'Ricoh Model',
      ],
    ],
  ];

}
