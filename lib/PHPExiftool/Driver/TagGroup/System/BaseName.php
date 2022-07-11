<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\System;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BaseName extends AbstractTagGroup
{

  protected string $id = 'System:BaseName';

  protected string $name = 'BaseName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Base Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121318
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.System:BaseName',
      'desc' => [
        'en' => 'Base Name',
      ],
    ],
  ];

}
