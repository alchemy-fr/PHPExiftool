<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SanyoQuality extends AbstractTagGroup
{

  protected string $id = 'Sanyo:SanyoQuality';

  protected string $name = 'SanyoQuality';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sanyo Quality',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sanyo::Main
       * line : 336467
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sanyo::Main.Sanyo:SanyoQuality',
      'desc' => [
        'en' => 'Sanyo Quality',
      ],
    ],
  ];

}
