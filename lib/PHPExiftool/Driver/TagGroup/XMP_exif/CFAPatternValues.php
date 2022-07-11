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
class CFAPatternValues extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:CFAPatternValues';

  protected string $name = 'CFAPatternValues';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'CFA Pattern Values',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 405467
       * type : integer
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::exif.XMP-exif:CFAPatternValues',
      'desc' => [
        'en' => 'CFA Pattern Values',
      ],
    ],
  ];

}
