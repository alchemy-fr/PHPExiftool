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
class ISOSetting extends AbstractTagGroup
{

  protected string $id = 'Kodak:ISOSetting';

  protected string $name = 'ISOSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ISO Setting',
    'fr' => 'Réglage ISO',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 158523
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Main.Kodak:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Type6
       * line : 160752
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Kodak::Type6.Kodak:ISOSetting',
      'desc' => [
        'en' => 'ISO Setting',
        'fr' => 'Réglage ISO',
      ],
    ],
  ];

}
