<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Thumbnails extends AbstractTagGroup
{

  protected string $id = 'XMP-xmp:Thumbnails';

  protected string $name = 'Thumbnails';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Thumbnails',
  ];

  protected int $count = 0;

  protected int $flags = 1088;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmp
       * line : 413070
       * type : struct
       * writable : true
       * count : 
       * flags : Alt,List
       */
      'id' => 'XMP::xmp.XMP-xmp:Thumbnails',
      'desc' => [
        'en' => 'Thumbnails',
      ],
    ],
  ];

}
