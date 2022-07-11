<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Sharpness extends AbstractTagGroup
{

  protected string $id = 'Kodak:Sharpness';

  protected string $name = 'Sharpness';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sharpness',
    'fr' => 'Accentuation',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 158669
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Main.Kodak:Sharpness',
      'desc' => [
        'en' => 'Sharpness',
        'fr' => 'Accentuation',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Type3
       * line : 160388
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Type3.Kodak:Sharpness',
      'desc' => [
        'en' => 'Sharpness',
        'fr' => 'Accentuation',
      ],
    ],
  ];

}
