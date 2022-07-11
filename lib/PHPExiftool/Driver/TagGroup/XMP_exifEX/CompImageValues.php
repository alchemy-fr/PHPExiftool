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
class CompImageValues extends AbstractTagGroup
{

  protected string $id = 'XMP-exifEX:CompImageValues';

  protected string $name = 'CompImageValues';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Comp Image Values',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exifEX
       * line : 408888
       * type : rational
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::exifEX.XMP-exifEX:CompImageValues',
      'desc' => [
        'en' => 'Comp Image Values',
      ],
    ],
  ];

}
