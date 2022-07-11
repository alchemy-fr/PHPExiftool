<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RenditionOfAlternatePaths extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:RenditionOfAlternatePaths';

  protected string $name = 'RenditionOfAlternatePaths';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Rendition Of Alternate Paths',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414543
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:RenditionOfAlternatePaths',
      'desc' => [
        'en' => 'Rendition Of Alternate Paths',
      ],
    ],
  ];

}
