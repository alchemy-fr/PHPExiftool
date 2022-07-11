<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SelObjType extends AbstractTagGroup
{

  protected string $id = 'Leaf:SelObjType';

  protected string $name = 'SelObjType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sel Obj Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::Selection
       * line : 162405
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::Selection.Leaf:SelObjType',
      'desc' => [
        'en' => 'Sel Obj Type',
      ],
    ],
  ];

}
