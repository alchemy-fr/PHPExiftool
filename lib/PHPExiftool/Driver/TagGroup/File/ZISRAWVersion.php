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
class ZISRAWVersion extends AbstractTagGroup
{

  protected string $id = 'File:ZISRAWVersion';

  protected string $name = 'ZISRAWVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'ZISRAW Version',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : ZISRAW::Main
       * line : 415392
       * type : int32u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'ZISRAW::Main.File:ZISRAWVersion',
      'desc' => [
        'en' => 'ZISRAW Version',
      ],
    ],
  ];

}
