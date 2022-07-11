<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OffSaleDateDate extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:OffSaleDateDate';

  protected string $name = 'OffSaleDateDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Off Sale Date Date',
  ];

  protected int $count = 0;

  protected int $flags = 65;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 411318
       * type : date
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List
       */
      'id' => 'XMP::prism.XMP-prism:OffSaleDateDate',
      'desc' => [
        'en' => 'Off Sale Date Date',
      ],
    ],
  ];

}
