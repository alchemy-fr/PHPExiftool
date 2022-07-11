<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensProfileMatchKeySensorFormatFactor extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:LensProfileMatchKeySensorFormatFactor';

  protected string $name = 'LensProfileMatchKeySensorFormatFactor';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Profile Match Key Sensor Format Factor',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 403194
       * type : real
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::crs.XMP-crs:LensProfileMatchKeySensorFormatFactor',
      'desc' => [
        'en' => 'Lens Profile Match Key Sensor Format Factor',
      ],
    ],
  ];

}
