<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MachineStamp extends AbstractTagGroup
{

  protected string $id = 'File:MachineStamp';

  protected string $name = 'MachineStamp';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Machine Stamp',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::Main
       * line : 167316
       * type : int8u
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'MRC::Main.File:MachineStamp',
      'desc' => [
        'en' => 'Machine Stamp',
      ],
    ],
  ];

}
