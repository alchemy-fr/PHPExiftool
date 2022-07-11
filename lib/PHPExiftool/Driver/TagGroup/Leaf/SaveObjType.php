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
class SaveObjType extends AbstractTagGroup
{

  protected string $id = 'Leaf:SaveObjType';

  protected string $name = 'SaveObjType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Save Obj Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::SaveSetup
       * line : 162354
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::SaveSetup.Leaf:SaveObjType',
      'desc' => [
        'en' => 'Save Obj Type',
      ],
    ],
  ];

}
