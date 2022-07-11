<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_acdsee;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Snapshots extends AbstractTagGroup
{

  protected string $id = 'XMP-acdsee:Snapshots';

  protected string $name = 'Snapshots';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Snapshots',
  ];

  protected int $count = 0;

  protected int $flags = 323;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::acdsee
       * line : 398219
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Bag,Binary,List
       */
      'id' => 'XMP::acdsee.XMP-acdsee:Snapshots',
      'desc' => [
        'en' => 'Snapshots',
      ],
    ],
  ];

}
