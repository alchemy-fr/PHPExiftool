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
class LimitSelectableImageArea5To4 extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:LimitSelectableImageArea5To4';

  protected string $name = 'LimitSelectableImageArea5To4';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Limit Selectable Image Area 5 To 4',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247390
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonSettings::Main.NikonSettings:LimitSelectableImageArea5To4',
      'desc' => [
        'en' => 'Limit Selectable Image Area 5 To 4',
      ],
    ],
    1 => [
      /**
       * table_name : NikonSettings::Main
       * line : 247512
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonSettings::Main.NikonSettings:LimitSelectableImageArea5To4',
      'desc' => [
        'en' => 'Limit Selectable Image Area 5 To 4',
      ],
    ],
  ];

}
