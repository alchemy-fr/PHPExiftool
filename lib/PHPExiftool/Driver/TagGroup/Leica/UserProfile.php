<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UserProfile extends AbstractTagGroup
{

  protected string $id = 'Leica:UserProfile';

  protected string $name = 'UserProfile';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'User Profile',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica2
       * line : 274657
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica2.Leica:UserProfile',
      'desc' => [
        'en' => 'User Profile',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Leica9
       * line : 275343
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica9.Leica:UserProfile',
      'desc' => [
        'en' => 'User Profile',
      ],
    ],
    2 => [
      /**
       * table_name : Panasonic::Subdir
       * line : 279703
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Subdir.Leica:UserProfile',
      'desc' => [
        'en' => 'User Profile',
      ],
    ],
  ];

}
