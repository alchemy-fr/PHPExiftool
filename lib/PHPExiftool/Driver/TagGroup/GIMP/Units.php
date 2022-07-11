<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIMP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Units extends AbstractTagGroup
{

  protected string $id = 'GIMP:Units';

  protected string $name = 'Units';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Units',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GIMP::Main
       * line : 131937
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIMP::Main.GIMP:Units',
      'desc' => [
        'en' => 'Units',
      ],
    ],
  ];

}
