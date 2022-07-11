<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LevelMeter extends AbstractTagGroup
{

  protected string $id = 'Kodak:LevelMeter';

  protected string $name = 'LevelMeter';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Level Meter',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Type11
       * line : 160320
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Kodak::Type11.Kodak:LevelMeter',
      'desc' => [
        'en' => 'Level Meter',
      ],
    ],
  ];

}
