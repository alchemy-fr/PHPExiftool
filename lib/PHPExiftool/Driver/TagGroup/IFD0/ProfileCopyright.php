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
class ProfileCopyright extends AbstractTagGroup
{

  protected string $id = 'IFD0:ProfileCopyright';

  protected string $name = 'ProfileCopyright';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Profile Copyright',
    'fr' => 'Copyright du profil',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120528
       * type : string
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:ProfileCopyright',
      'desc' => [
        'en' => 'Profile Copyright',
        'fr' => 'Copyright du profil',
      ],
    ],
  ];

}
