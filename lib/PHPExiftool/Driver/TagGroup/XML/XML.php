<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XML extends AbstractTagGroup
{

  protected string $id = 'XML:XML';

  protected string $name = 'XML';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'XML',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121917
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'Extra.XML:XML',
      'desc' => [
        'en' => 'XML',
      ],
    ],
  ];

}
