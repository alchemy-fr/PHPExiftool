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
class CropAspectRatio extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:CropAspectRatio';

  protected string $name = 'CropAspectRatio';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Crop Aspect Ratio',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80784
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:CropAspectRatio',
      'desc' => [
        'en' => 'Crop Aspect Ratio',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82539
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:CropAspectRatio',
      'desc' => [
        'en' => 'Crop Aspect Ratio',
      ],
    ],
  ];

}
