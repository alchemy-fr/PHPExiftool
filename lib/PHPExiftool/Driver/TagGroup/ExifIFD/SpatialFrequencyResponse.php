<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SpatialFrequencyResponse extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:SpatialFrequencyResponse';

  protected string $name = 'SpatialFrequencyResponse';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Spatial Frequency Response',
    'fr' => 'Réponse spatiale en fréquence',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 115567
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:SpatialFrequencyResponse',
      'desc' => [
        'en' => 'Spatial Frequency Response',
        'fr' => 'Réponse spatiale en fréquence',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 116908
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:SpatialFrequencyResponse',
      'desc' => [
        'en' => 'Spatial Frequency Response',
        'fr' => 'Réponse spatiale en fréquence',
      ],
    ],
  ];

}
