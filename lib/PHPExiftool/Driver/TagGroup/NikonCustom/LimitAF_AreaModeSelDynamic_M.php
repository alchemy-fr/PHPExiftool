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
class LimitAF_AreaModeSelDynamic_M extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:LimitAF-AreaModeSelDynamic_M';

  protected string $name = 'LimitAF-AreaModeSelDynamic_M';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Limit AF-Area Mode Sel Dynamic M',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 239584
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:LimitAF-AreaModeSelDynamic_M',
      'desc' => [
        'en' => 'Limit AF-Area Mode Sel Dynamic M',
      ],
    ],
  ];

}
