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
class OffSaleDateA_platform extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:OffSaleDateA-platform';

  protected string $name = 'OffSaleDateA-platform';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Off Sale Date A-platform',
  ];

  protected int $count = 0;

  protected int $flags = 65;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 411315
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List
       */
      'id' => 'XMP::prism.XMP-prism:OffSaleDateA-platform',
      'desc' => [
        'en' => 'Off Sale Date A-platform',
      ],
    ],
  ];

}
