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
class LensSerialNumber extends AbstractTagGroup
{

  protected string $id = 'Canon:LensSerialNumber';

  protected string $name = 'LensSerialNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Serial Number',
    'fr' => 'Numéro de série objectif',
  ];

  protected int $count = 5;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo5DmkIII
       * line : 39362
       * type : undef
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5DmkIII.Canon:LensSerialNumber',
      'desc' => [
        'en' => 'Lens Serial Number',
        'fr' => 'Numéro de série objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfoUnknown
       * line : 55545
       * type : undef
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfoUnknown.Canon:LensSerialNumber',
      'desc' => [
        'en' => 'Lens Serial Number',
        'fr' => 'Numéro de série objectif',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::LensInfo
       * line : 64192
       * type : undef
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Canon::LensInfo.Canon:LensSerialNumber',
      'desc' => [
        'en' => 'Lens Serial Number',
        'fr' => 'Numéro de série objectif',
      ],
    ],
  ];

}
