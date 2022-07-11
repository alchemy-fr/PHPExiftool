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
class CPUType extends AbstractTagGroup
{

  protected string $id = 'EXE:CPUType';

  protected string $name = 'CPUType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'CPU Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::ELF
       * line : 108388
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::ELF.EXE:CPUType',
      'desc' => [
        'en' => 'CPU Type',
      ],
    ],
    1 => [
      /**
       * table_name : EXE::MachO
       * line : 108514
       * type : ?
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'EXE::MachO.EXE:CPUType',
      'desc' => [
        'en' => 'CPU Type',
      ],
    ],
  ];

}
