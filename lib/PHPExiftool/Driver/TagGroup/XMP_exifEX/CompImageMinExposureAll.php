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
class CompImageMinExposureAll extends AbstractTagGroup
{

  protected string $id = 'XMP-exifEX:CompImageMinExposureAll';

  protected string $name = 'CompImageMinExposureAll';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Comp Image Min Exposure All',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exifEX
       * line : 408867
       * type : rational
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::exifEX.XMP-exifEX:CompImageMinExposureAll',
      'desc' => [
        'en' => 'Comp Image Min Exposure All',
      ],
    ],
  ];

}
