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
class SharpObjName extends AbstractTagGroup
{

  protected string $id = 'Leaf:SharpObjName';

  protected string $name = 'SharpObjName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sharp Obj Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::Sharpness
       * line : 162421
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::Sharpness.Leaf:SharpObjName',
      'desc' => [
        'en' => 'Sharp Obj Name',
      ],
    ],
  ];

}
