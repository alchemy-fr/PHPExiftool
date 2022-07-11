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
class ProfileLookTableData extends AbstractTagGroup
{

  protected string $id = 'IFD0:ProfileLookTableData';

  protected string $name = 'ProfileLookTableData';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Profile Look Table Data',
    'fr' => 'Données de table de correspondance de profil',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120687
       * type : float
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:ProfileLookTableData',
      'desc' => [
        'en' => 'Profile Look Table Data',
        'fr' => 'Données de table de correspondance de profil',
      ],
    ],
  ];

}
