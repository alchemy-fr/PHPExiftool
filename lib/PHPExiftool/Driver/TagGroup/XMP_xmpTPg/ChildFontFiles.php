<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpTPg;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChildFontFiles extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpTPg:ChildFontFiles';

  protected string $name = 'ChildFontFiles';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Child Font Files',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpTPg
       * line : 414830
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::xmpTPg.XMP-xmpTPg:ChildFontFiles',
      'desc' => [
        'en' => 'Child Font Files',
      ],
    ],
  ];

}
