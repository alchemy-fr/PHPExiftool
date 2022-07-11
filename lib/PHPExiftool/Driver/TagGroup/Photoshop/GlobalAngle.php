<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GlobalAngle extends AbstractTagGroup
{

  protected string $id = 'Photoshop:GlobalAngle';

  protected string $name = 'GlobalAngle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Global Angle',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 305864
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::Main.Photoshop:GlobalAngle',
      'desc' => [
        'en' => 'Global Angle',
      ],
    ],
  ];

}
