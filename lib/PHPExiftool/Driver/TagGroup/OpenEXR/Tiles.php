<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\OpenEXR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Tiles extends AbstractTagGroup
{

  protected string $id = 'OpenEXR:Tiles';

  protected string $name = 'Tiles';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tiles',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : OpenEXR::Main
       * line : 264024
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'OpenEXR::Main.OpenEXR:Tiles',
      'desc' => [
        'en' => 'Tiles',
      ],
    ],
  ];

}
