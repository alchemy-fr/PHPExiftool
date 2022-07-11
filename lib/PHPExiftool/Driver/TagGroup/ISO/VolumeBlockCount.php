<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ISO;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VolumeBlockCount extends AbstractTagGroup
{

  protected string $id = 'ISO:VolumeBlockCount';

  protected string $name = 'VolumeBlockCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Volume Block Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::PrimaryVolume
       * line : 152341
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ISO::PrimaryVolume.ISO:VolumeBlockCount',
      'desc' => [
        'en' => 'Volume Block Count',
      ],
    ],
  ];

}
