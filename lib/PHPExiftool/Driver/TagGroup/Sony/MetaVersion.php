<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MetaVersion extends AbstractTagGroup
{

  protected string $id = 'Sony:MetaVersion';

  protected string $name = 'MetaVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Meta Version',
  ];

  protected int $count = 16;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::ShotInfo
       * line : 362387
       * type : string
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Sony::ShotInfo.Sony:MetaVersion',
      'desc' => [
        'en' => 'Meta Version',
      ],
    ],
  ];

}
