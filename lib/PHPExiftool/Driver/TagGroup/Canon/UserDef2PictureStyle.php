<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UserDef2PictureStyle extends AbstractTagGroup
{

  protected string $id = 'Canon:UserDef2PictureStyle';

  protected string $name = 'UserDef2PictureStyle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'User Def 2 Picture Style',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 34807
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:UserDef2PictureStyle',
      'desc' => [
        'en' => 'User Def 2 Picture Style',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo
       * line : 68024
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo.Canon:UserDef2PictureStyle',
      'desc' => [
        'en' => 'User Def 2 Picture Style',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 69202
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo2.Canon:UserDef2PictureStyle',
      'desc' => [
        'en' => 'User Def 2 Picture Style',
      ],
    ],
  ];

}
