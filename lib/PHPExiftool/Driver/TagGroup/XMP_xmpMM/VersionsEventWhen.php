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
class VersionsEventWhen extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:VersionsEventWhen';

  protected string $name = 'VersionsEventWhen';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Versions Event When',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414671
       * type : date
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:VersionsEventWhen',
      'desc' => [
        'en' => 'Versions Event When',
      ],
    ],
  ];

}
