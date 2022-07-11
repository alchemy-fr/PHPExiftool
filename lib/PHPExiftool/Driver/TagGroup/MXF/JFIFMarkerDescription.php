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
class JFIFMarkerDescription extends AbstractTagGroup
{

  protected string $id = 'MXF:JFIFMarkerDescription';

  protected string $name = 'JFIFMarkerDescription';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'JFIF Marker Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172394
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:JFIFMarkerDescription',
      'desc' => [
        'en' => 'JFIF Marker Description',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172397
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:JFIFMarkerDescription',
      'desc' => [
        'en' => 'JFIF Marker Description',
      ],
    ],
  ];

}
