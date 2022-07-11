<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModelType extends AbstractTagGroup
{

  protected string $id = 'Kodak:ModelType';

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
       * table_name : Kodak::MOV
       * line : 157932
       * type : string
       * writable : false
       * count : 8
       * flags : Permanent
       */
      'id' => 'Kodak::MOV.Kodak:ModelType',
      'desc' => [
        'en' => 'Model Type',
      ],
    ],
  ];

}
