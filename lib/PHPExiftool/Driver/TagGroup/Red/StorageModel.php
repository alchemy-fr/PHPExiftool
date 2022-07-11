<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Red;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StorageModel extends AbstractTagGroup
{

  protected string $id = 'Red:StorageModel';

  protected string $name = 'StorageModel';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Storage Model',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Red::Main
       * line : 331828
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Red::Main.Red:StorageModel',
      'desc' => [
        'en' => 'Storage Model',
      ],
    ],
  ];

}
