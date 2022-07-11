<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CornerLatitudePoint4 extends AbstractTagGroup
{

  protected string $id = 'MXF:CornerLatitudePoint4';

  protected string $name = 'CornerLatitudePoint4';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Corner Latitude Point 4',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170745
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CornerLatitudePoint4',
      'desc' => [
        'en' => 'Corner Latitude Point 4',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170748
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CornerLatitudePoint4',
      'desc' => [
        'en' => 'Corner Latitude Point 4',
      ],
    ],
  ];

}
