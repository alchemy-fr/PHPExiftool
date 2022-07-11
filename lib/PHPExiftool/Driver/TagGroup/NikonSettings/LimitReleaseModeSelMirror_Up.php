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
class LimitReleaseModeSelMirror_Up extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:LimitReleaseModeSelMirror-Up';

  protected string $name = 'LimitReleaseModeSelMirror-Up';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Limit Release Mode Sel Mirror-Up',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 248277
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonSettings::Main.NikonSettings:LimitReleaseModeSelMirror-Up',
      'desc' => [
        'en' => 'Limit Release Mode Sel Mirror-Up',
      ],
    ],
  ];

}
