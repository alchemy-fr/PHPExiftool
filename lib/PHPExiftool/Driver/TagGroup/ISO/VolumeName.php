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
class VolumeName extends AbstractTagGroup
{

  protected string $id = 'ISO:VolumeName';

  protected string $name = 'VolumeName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Volume Name',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::PrimaryVolume
       * line : 152337
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'ISO::PrimaryVolume.ISO:VolumeName',
      'desc' => [
        'en' => 'Volume Name',
      ],
    ],
  ];

}
