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
class ColorObjVersion extends AbstractTagGroup
{

  protected string $id = 'Leaf:ColorObjVersion';

  protected string $name = 'ColorObjVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Color Obj Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::ColorSetup
       * line : 162171
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::ColorSetup.Leaf:ColorObjVersion',
      'desc' => [
        'en' => 'Color Obj Version',
      ],
    ],
  ];

}
