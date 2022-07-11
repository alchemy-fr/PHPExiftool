<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_tiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhitePoint extends AbstractTagGroup
{

  protected string $id = 'XMP-tiff:WhitePoint';

  protected string $name = 'WhitePoint';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'White Point',
    'fr' => 'Chromaticité du point blanc',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::tiff
       * line : 412719
       * type : rational
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::tiff.XMP-tiff:WhitePoint',
      'desc' => [
        'en' => 'White Point',
        'fr' => 'Chromaticité du point blanc',
      ],
    ],
  ];

}
