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
class GPSImgDirectionRef extends AbstractTagGroup
{

  protected string $id = 'FLIR:GPSImgDirectionRef';

  protected string $name = 'GPSImgDirectionRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Img Direction Ref',
    'fr' => 'Référence pour la direction l\'image',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::GPSInfo
       * line : 123346
       * type : string
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'FLIR::GPSInfo.FLIR:GPSImgDirectionRef',
      'desc' => [
        'en' => 'GPS Img Direction Ref',
        'fr' => 'Référence pour la direction l\'image',
      ],
    ],
  ];

}
