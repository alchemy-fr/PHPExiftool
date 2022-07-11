<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProfileHueSatMapData1 extends AbstractTagGroup
{

  protected string $id = 'IFD0:ProfileHueSatMapData1';

  protected string $name = 'ProfileHueSatMapData1';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Profile Hue Sat Map Data 1',
    'fr' => 'Données de profil teinte sat. 1',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120456
       * type : float
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:ProfileHueSatMapData1',
      'desc' => [
        'en' => 'Profile Hue Sat Map Data 1',
        'fr' => 'Données de profil teinte sat. 1',
      ],
    ],
  ];

}
