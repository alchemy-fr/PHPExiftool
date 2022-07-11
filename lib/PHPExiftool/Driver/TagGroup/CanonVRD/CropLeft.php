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
class CropLeft extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:CropLeft';

  protected string $name = 'CropLeft';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Crop Left',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82506
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:CropLeft',
      'desc' => [
        'en' => 'Crop Left',
      ],
    ],
  ];

}
