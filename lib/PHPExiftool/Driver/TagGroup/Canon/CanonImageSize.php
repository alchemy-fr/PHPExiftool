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
class CanonImageSize extends AbstractTagGroup
{

  protected string $id = 'Canon:CanonImageSize';

  protected string $name = 'CanonImageSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Canon Image Size',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1DmkII
       * line : 13126
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkII.Canon:CanonImageSize',
      'desc' => [
        'en' => 'Canon Image Size',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraSettings
       * line : 56021
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraSettings.Canon:CanonImageSize',
      'desc' => [
        'en' => 'Canon Image Size',
      ],
    ],
  ];

}
