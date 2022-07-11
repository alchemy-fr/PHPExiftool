<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CropActive extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:CropActive';

  protected string $name = 'CropActive';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Crop Active',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::CropInfo
       * line : 80156
       * type : int32s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::CropInfo.CanonVRD:CropActive',
      'desc' => [
        'en' => 'Crop Active',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82484
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:CropActive',
      'desc' => [
        'en' => 'Crop Active',
      ],
    ],
  ];

}
