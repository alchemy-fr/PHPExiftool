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
class LimitSelectableImageArea16To9 extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:LimitSelectableImageArea16To9';

  protected string $name = 'LimitSelectableImageArea16To9';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Limit Selectable Image Area 16 To 9',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247534
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonSettings::Main.NikonSettings:LimitSelectableImageArea16To9',
      'desc' => [
        'en' => 'Limit Selectable Image Area 16 To 9',
      ],
    ],
    1 => [
      /**
       * table_name : NikonSettings::Main
       * line : 248291
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonSettings::Main.NikonSettings:LimitSelectableImageArea16To9',
      'desc' => [
        'en' => 'Limit Selectable Image Area 16 To 9',
      ],
    ],
  ];

}
