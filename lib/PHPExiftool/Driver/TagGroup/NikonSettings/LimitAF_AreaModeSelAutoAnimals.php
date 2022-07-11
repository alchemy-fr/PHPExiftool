<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LimitAF_AreaModeSelAutoAnimals extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:LimitAF-AreaModeSelAutoAnimals';

  protected string $name = 'LimitAF-AreaModeSelAutoAnimals';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Limit AF-Area Mode Sel Auto Animals',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 249164
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonSettings::Main.NikonSettings:LimitAF-AreaModeSelAutoAnimals',
      'desc' => [
        'en' => 'Limit AF-Area Mode Sel Auto Animals',
      ],
    ],
  ];

}
