<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ITC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DataType extends AbstractTagGroup
{

  protected string $id = 'ITC:DataType';

  protected string $name = 'DataType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Data Type',
    'fr' => 'Type de données',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : ITC::Header
       * line : 152435
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'ITC::Header.ITC:DataType',
      'desc' => [
        'en' => 'Data Type',
        'fr' => 'Type de données',
      ],
    ],
  ];

}
