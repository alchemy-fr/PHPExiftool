<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorBalanceVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:ColorBalanceVersion';

  protected string $name = 'ColorBalanceVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Balance Version',
    'fr' => 'Version de la Balance des couleurs',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ColorBalanceB
       * line : 192359
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ColorBalanceB.Nikon:ColorBalanceVersion',
      'desc' => [
        'en' => 'Color Balance Version',
        'fr' => 'Version de la Balance des couleurs',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ColorBalanceC
       * line : 192428
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ColorBalanceC.Nikon:ColorBalanceVersion',
      'desc' => [
        'en' => 'Color Balance Version',
        'fr' => 'Version de la Balance des couleurs',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::ColorBalanceUnknown
       * line : 192526
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::ColorBalanceUnknown.Nikon:ColorBalanceVersion',
      'desc' => [
        'en' => 'Color Balance Version',
        'fr' => 'Version de la Balance des couleurs',
      ],
    ],
  ];

}
