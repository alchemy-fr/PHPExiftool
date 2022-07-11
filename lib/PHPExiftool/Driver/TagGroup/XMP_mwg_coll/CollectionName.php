<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_mwg_coll;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CollectionName extends AbstractTagGroup
{

  protected string $id = 'XMP-mwg-coll:CollectionName';

  protected string $name = 'CollectionName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Collection Name',
    'fr' => 'Nom de collection',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : MWG::Collections
       * line : 167363
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'MWG::Collections.XMP-mwg-coll:CollectionName',
      'desc' => [
        'en' => 'Collection Name',
        'fr' => 'Nom de collection',
      ],
    ],
  ];

}
