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
class GlobalAltitude extends AbstractTagGroup
{

  protected string $id = 'Photoshop:GlobalAltitude';

  protected string $name = 'GlobalAltitude';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Global Altitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 305911
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::Main.Photoshop:GlobalAltitude',
      'desc' => [
        'en' => 'Global Altitude',
      ],
    ],
  ];

}
