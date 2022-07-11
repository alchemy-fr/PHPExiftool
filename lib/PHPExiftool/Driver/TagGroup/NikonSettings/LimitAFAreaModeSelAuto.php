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
class LimitAFAreaModeSelAuto extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:LimitAFAreaModeSelAuto';

  protected string $name = 'LimitAFAreaModeSelAuto';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Limit AF Area Mode Sel Auto',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247379
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonSettings::Main.NikonSettings:LimitAFAreaModeSelAuto',
      'desc' => [
        'en' => 'Limit AF Area Mode Sel Auto',
      ],
    ],
  ];

}
