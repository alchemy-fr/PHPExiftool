<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSImgDirection extends AbstractTagGroup
{

  protected string $id = 'FLIR:GPSImgDirection';

  protected string $name = 'GPSImgDirection';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Img Direction',
    'fr' => 'Direction de l\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::GPSInfo
       * line : 123428
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::GPSInfo.FLIR:GPSImgDirection',
      'desc' => [
        'en' => 'GPS Img Direction',
        'fr' => 'Direction de l\'image',
      ],
    ],
  ];

}
