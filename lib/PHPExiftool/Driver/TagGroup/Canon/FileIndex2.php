<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileIndex2 extends AbstractTagGroup
{

  protected string $id = 'Canon:FileIndex2';

  protected string $name = 'FileIndex2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'File Index 2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 39390
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:FileIndex2',
      'desc' => [
        'en' => 'File Index 2',
      ],
    ],
  ];

}
