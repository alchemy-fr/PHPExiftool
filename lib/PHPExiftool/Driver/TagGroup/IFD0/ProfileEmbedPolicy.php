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
class ProfileEmbedPolicy extends AbstractTagGroup
{

  protected string $id = 'IFD0:ProfileEmbedPolicy';

  protected string $name = 'ProfileEmbedPolicy';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Profile Embed Policy',
    'fr' => 'Règles d\'usage du profil incluses',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120481
       * type : int32u
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:ProfileEmbedPolicy',
      'desc' => [
        'en' => 'Profile Embed Policy',
        'fr' => 'Règles d\'usage du profil incluses',
      ],
    ],
  ];

}
