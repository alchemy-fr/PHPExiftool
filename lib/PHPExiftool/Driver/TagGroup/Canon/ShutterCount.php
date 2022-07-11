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
class ShutterCount extends AbstractTagGroup
{

  protected string $id = 'Canon:ShutterCount';

  protected string $name = 'ShutterCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shutter Count',
    'fr' => 'Comptage des déclenchements',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1DmkIII
       * line : 15659
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIII.Canon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::FileInfo
       * line : 63394
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::FileInfo.Canon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::FileInfo
       * line : 63405
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::FileInfo.Canon:ShutterCount',
      'desc' => [
        'en' => 'Shutter Count',
        'fr' => 'Comptage des déclenchements',
      ],
    ],
  ];

}
