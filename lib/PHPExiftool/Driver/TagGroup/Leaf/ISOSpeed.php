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
class ISOSpeed extends AbstractTagGroup
{

  protected string $id = 'Leaf:ISOSpeed';

  protected string $name = 'ISOSpeed';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'ISO Speed',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::CameraSetup
       * line : 161951
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::CameraSetup.Leaf:ISOSpeed',
      'desc' => [
        'en' => 'ISO Speed',
      ],
    ],
  ];

}
