<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SpatialFrequencyResponse extends AbstractTagGroup
{

  protected string $id = 'FlashPix:SpatialFrequencyResponse';

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
       * table_name : FlashPix::ImageInfo
       * line : 126722
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::ImageInfo.FlashPix:SpatialFrequencyResponse',
      'desc' => [
        'en' => 'Spatial Frequency Response',
        'fr' => 'Réponse spatiale en fréquence',
      ],
    ],
  ];

}
