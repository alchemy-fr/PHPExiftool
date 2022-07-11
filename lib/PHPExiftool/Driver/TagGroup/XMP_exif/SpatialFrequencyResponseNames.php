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
class SpatialFrequencyResponseNames extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:SpatialFrequencyResponseNames';

  protected string $name = 'SpatialFrequencyResponseNames';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Spatial Frequency Response Names',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 408550
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::exif.XMP-exif:SpatialFrequencyResponseNames',
      'desc' => [
        'en' => 'Spatial Frequency Response Names',
      ],
    ],
  ];

}
