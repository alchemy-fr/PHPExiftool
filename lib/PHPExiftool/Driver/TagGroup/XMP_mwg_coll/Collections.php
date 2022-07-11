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
class Collections extends AbstractTagGroup
{

  protected string $id = 'XMP-mwg-coll:Collections';

  protected string $name = 'Collections';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Collections',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : MWG::Collections
       * line : 167359
       * type : struct
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'MWG::Collections.XMP-mwg-coll:Collections',
      'desc' => [
        'en' => 'Collections',
      ],
    ],
  ];

}
