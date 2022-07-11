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
class CropY extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:CropY';

  protected string $name = 'CropY';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Crop Y',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::CropInfo
       * line : 80188
       * type : int32s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::CropInfo.CanonVRD:CropY',
      'desc' => [
        'en' => 'Crop Y',
      ],
    ],
  ];

}
