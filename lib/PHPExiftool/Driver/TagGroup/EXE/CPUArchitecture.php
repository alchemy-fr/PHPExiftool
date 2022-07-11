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
class CPUArchitecture extends AbstractTagGroup
{

  protected string $id = 'EXE:CPUArchitecture';

  protected string $name = 'CPUArchitecture';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'CPU Architecture',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::ELF
       * line : 108323
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::ELF.EXE:CPUArchitecture',
      'desc' => [
        'en' => 'CPU Architecture',
      ],
    ],
    1 => [
      /**
       * table_name : EXE::MachO
       * line : 108499
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::MachO.EXE:CPUArchitecture',
      'desc' => [
        'en' => 'CPU Architecture',
      ],
    ],
    2 => [
      /**
       * table_name : EXE::PEF
       * line : 109308
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'EXE::PEF.EXE:CPUArchitecture',
      'desc' => [
        'en' => 'CPU Architecture',
      ],
    ],
  ];

}
