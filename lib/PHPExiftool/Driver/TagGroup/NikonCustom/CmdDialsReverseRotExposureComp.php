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
class CmdDialsReverseRotExposureComp extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:CmdDialsReverseRotExposureComp';

  protected string $name = 'CmdDialsReverseRotExposureComp';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Cmd Dials Reverse Rot Exposure Comp',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 238052
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:CmdDialsReverseRotExposureComp',
      'desc' => [
        'en' => 'Cmd Dials Reverse Rot Exposure Comp',
      ],
    ],
  ];

}
