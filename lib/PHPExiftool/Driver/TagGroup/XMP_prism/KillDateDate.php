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
class KillDateDate extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:KillDateDate';

  protected string $name = 'KillDateDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Kill Date Date',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 411274
       * type : date
       * writable : true
       * count : 
       * flags : Avoid,Flattened
       */
      'id' => 'XMP::prism.XMP-prism:KillDateDate',
      'desc' => [
        'en' => 'Kill Date Date',
      ],
    ],
  ];

}
