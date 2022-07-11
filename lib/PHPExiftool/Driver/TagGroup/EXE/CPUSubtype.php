<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CPUSubtype extends AbstractTagGroup
{

  protected string $id = 'EXE:CPUSubtype';

  protected string $name = 'CPUSubtype';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'CPU Subtype',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::MachO
       * line : 108584
       * type : ?
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'EXE::MachO.EXE:CPUSubtype',
      'desc' => [
        'en' => 'CPU Subtype',
      ],
    ],
  ];

}
