<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_PROP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IndexOffset extends AbstractTagGroup
{

  protected string $id = 'Real-PROP:IndexOffset';

  protected string $name = 'IndexOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Index Offset',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::Properties
       * line : 330877
       * type : int32u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::Properties.Real-PROP:IndexOffset',
      'desc' => [
        'en' => 'Index Offset',
      ],
    ],
  ];

}
