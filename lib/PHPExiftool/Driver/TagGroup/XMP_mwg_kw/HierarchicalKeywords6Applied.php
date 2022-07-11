<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_mwg_kw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HierarchicalKeywords6Applied extends AbstractTagGroup
{

  protected string $id = 'XMP-mwg-kw:HierarchicalKeywords6Applied';

  protected string $name = 'HierarchicalKeywords6Applied';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Hierarchical Keywords 6 Applied',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : MWG::Keywords
       * line : 167425
       * type : boolean
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'MWG::Keywords.XMP-mwg-kw:HierarchicalKeywords6Applied',
      'desc' => [
        'en' => 'Hierarchical Keywords 6 Applied',
      ],
    ],
  ];

}
