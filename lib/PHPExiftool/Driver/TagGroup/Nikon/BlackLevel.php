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
class BlackLevel extends AbstractTagGroup
{

  protected string $id = 'Nikon:BlackLevel';

  protected string $name = 'BlackLevel';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Black Level',
    'fr' => 'Niveau noir',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ColorBalanceC
       * line : 192438
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ColorBalanceC.Nikon:BlackLevel',
      'desc' => [
        'en' => 'Black Level',
        'fr' => 'Niveau noir',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::Main
       * line : 197475
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:BlackLevel',
      'desc' => [
        'en' => 'Black Level',
        'fr' => 'Niveau noir',
      ],
    ],
  ];

}
