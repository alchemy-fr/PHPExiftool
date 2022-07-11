<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RBLevelsCloudy extends AbstractTagGroup
{

  protected string $id = 'Olympus:WB_RBLevelsCloudy';

  protected string $name = 'WB_RBLevelsCloudy';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RB Levels Cloudy',
    'fr' => 'Niveaux BB RB nuageux',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawInfo
       * line : 261207
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Olympus::RawInfo.Olympus:WB_RBLevelsCloudy',
      'desc' => [
        'en' => 'WB RB Levels Cloudy',
        'fr' => 'Niveaux BB RB nuageux',
      ],
    ],
  ];

}
