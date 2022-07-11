<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_ics;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TagStructure extends AbstractTagGroup
{

  protected string $id = 'XMP-ics:TagStructure';

  protected string $name = 'TagStructure';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Tag Structure',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::ics
       * line : 409163
       * type : struct
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'XMP::ics.XMP-ics:TagStructure',
      'desc' => [
        'en' => 'Tag Structure',
      ],
    ],
  ];

}
