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
class VersionsEvent extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:VersionsEvent';

  protected string $name = 'VersionsEvent';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Versions Event',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414653
       * type : struct
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:VersionsEvent',
      'desc' => [
        'en' => 'Versions Event',
      ],
    ],
  ];

}
