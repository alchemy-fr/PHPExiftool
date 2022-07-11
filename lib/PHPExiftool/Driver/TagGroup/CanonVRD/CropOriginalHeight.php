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
class CropOriginalHeight extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:CropOriginalHeight';

  protected string $name = 'CropOriginalHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Crop Original Height',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::CropInfo
       * line : 80212
       * type : int32s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::CropInfo.CanonVRD:CropOriginalHeight',
      'desc' => [
        'en' => 'Crop Original Height',
      ],
    ],
  ];

}
