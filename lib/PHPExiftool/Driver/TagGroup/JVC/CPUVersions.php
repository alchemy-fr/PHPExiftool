<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JVC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CPUVersions extends AbstractTagGroup
{

  protected string $id = 'JVC:CPUVersions';

  protected string $name = 'CPUVersions';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'CPU Versions',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : JVC::Main
       * line : 153746
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'JVC::Main.JVC:CPUVersions',
      'desc' => [
        'en' => 'CPU Versions',
      ],
    ],
  ];

}
