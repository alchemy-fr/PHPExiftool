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
class CPUCount extends AbstractTagGroup
{

  protected string $id = 'EXE:CPUCount';

  protected string $name = 'CPUCount';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'CPU Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::MachO
       * line : 108509
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::MachO.EXE:CPUCount',
      'desc' => [
        'en' => 'CPU Count',
      ],
    ],
  ];

}
