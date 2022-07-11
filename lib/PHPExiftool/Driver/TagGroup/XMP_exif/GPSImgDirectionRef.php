<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSImgDirectionRef extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:GPSImgDirectionRef';

  protected string $name = 'GPSImgDirectionRef';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Img Direction Ref',
    'fr' => 'Référence pour la direction l\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 406991
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:GPSImgDirectionRef',
      'desc' => [
        'en' => 'GPS Img Direction Ref',
        'fr' => 'Référence pour la direction l\'image',
      ],
    ],
  ];

}
