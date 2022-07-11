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
class CornerLongitudePoint2 extends AbstractTagGroup
{

  protected string $id = 'MXF:CornerLongitudePoint2';

  protected string $name = 'CornerLongitudePoint2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Corner Longitude Point 2',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170757
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CornerLongitudePoint2',
      'desc' => [
        'en' => 'Corner Longitude Point 2',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170760
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CornerLongitudePoint2',
      'desc' => [
        'en' => 'Corner Longitude Point 2',
      ],
    ],
  ];

}
