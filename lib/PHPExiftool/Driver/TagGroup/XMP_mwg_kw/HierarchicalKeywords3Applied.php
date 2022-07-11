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
class HierarchicalKeywords3Applied extends AbstractTagGroup
{

  protected string $id = 'XMP-mwg-kw:HierarchicalKeywords3Applied';

  protected string $name = 'HierarchicalKeywords3Applied';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Hierarchical Keywords 3 Applied',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : MWG::Keywords
       * line : 167401
       * type : boolean
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'MWG::Keywords.XMP-mwg-kw:HierarchicalKeywords3Applied',
      'desc' => [
        'en' => 'Hierarchical Keywords 3 Applied',
      ],
    ],
  ];

}
