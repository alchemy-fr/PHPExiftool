<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exifEX;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompImageTotalExposurePeriod extends AbstractTagGroup
{

  protected string $id = 'XMP-exifEX:CompImageTotalExposurePeriod';

  protected string $name = 'CompImageTotalExposurePeriod';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Comp Image Total Exposure Period',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exifEX
       * line : 408885
       * type : rational
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::exifEX.XMP-exifEX:CompImageTotalExposurePeriod',
      'desc' => [
        'en' => 'Comp Image Total Exposure Period',
      ],
    ],
  ];

}
