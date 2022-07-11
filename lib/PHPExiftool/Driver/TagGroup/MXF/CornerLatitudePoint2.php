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
class CornerLatitudePoint2 extends AbstractTagGroup
{

  protected string $id = 'MXF:CornerLatitudePoint2';

  protected string $name = 'CornerLatitudePoint2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Corner Latitude Point 2',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170733
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CornerLatitudePoint2',
      'desc' => [
        'en' => 'Corner Latitude Point 2',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170736
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CornerLatitudePoint2',
      'desc' => [
        'en' => 'Corner Latitude Point 2',
      ],
    ],
  ];

}
