<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModelType extends AbstractTagGroup
{

  protected string $id = 'Minolta:ModelType';

  protected string $name = 'ModelType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Model Type',
  ];

  protected int $count = 8;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::MOV1
       * line : 182921
       * type : string
       * writable : false
       * count : 8
       * flags : Permanent
       */
      'id' => 'Minolta::MOV1.Minolta:ModelType',
      'desc' => [
        'en' => 'Model Type',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::MOV2
       * line : 183018
       * type : string
       * writable : false
       * count : 8
       * flags : Permanent
       */
      'id' => 'Minolta::MOV2.Minolta:ModelType',
      'desc' => [
        'en' => 'Model Type',
      ],
    ],
  ];

}
