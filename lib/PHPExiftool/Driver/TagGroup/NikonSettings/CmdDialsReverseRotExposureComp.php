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
class CmdDialsReverseRotExposureComp extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:CmdDialsReverseRotExposureComp';

  protected string $name = 'CmdDialsReverseRotExposureComp';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Cmd Dials Reverse Rot Exposure Comp',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 244989
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonSettings::Main.NikonSettings:CmdDialsReverseRotExposureComp',
      'desc' => [
        'en' => 'Cmd Dials Reverse Rot Exposure Comp',
      ],
    ],
  ];

}
