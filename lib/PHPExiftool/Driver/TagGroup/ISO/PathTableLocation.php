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
class PathTableLocation extends AbstractTagGroup
{

  protected string $id = 'ISO:PathTableLocation';

  protected string $name = 'PathTableLocation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Path Table Location',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::PrimaryVolume
       * line : 152361
       * type : int32u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'ISO::PrimaryVolume.ISO:PathTableLocation',
      'desc' => [
        'en' => 'Path Table Location',
      ],
    ],
  ];

}
