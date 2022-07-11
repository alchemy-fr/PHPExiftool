<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\LNK;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MachineID extends AbstractTagGroup
{

  protected string $id = 'LNK:MachineID';

  protected string $name = 'MachineID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Machine ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::TrackerData
       * line : 161918
       * type : var_string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::TrackerData.LNK:MachineID',
      'desc' => [
        'en' => 'Machine ID',
      ],
    ],
  ];

}
