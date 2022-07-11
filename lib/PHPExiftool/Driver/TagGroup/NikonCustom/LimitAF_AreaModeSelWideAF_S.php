<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LimitAF_AreaModeSelWideAF_S extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:LimitAF-AreaModeSelWideAF_S';

  protected string $name = 'LimitAF-AreaModeSelWideAF_S';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Limit AF-Area Mode Sel Wide AF S',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 235608
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:LimitAF-AreaModeSelWideAF_S',
      'desc' => [
        'en' => 'Limit AF-Area Mode Sel Wide AF S',
      ],
    ],
  ];

}
