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
class ShootObjBackType extends AbstractTagGroup
{

  protected string $id = 'Leaf:ShootObjBackType';

  protected string $name = 'ShootObjBackType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Shoot Obj Back Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::ShootSetup
       * line : 162440
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::ShootSetup.Leaf:ShootObjBackType',
      'desc' => [
        'en' => 'Shoot Obj Back Type',
      ],
    ],
  ];

}
