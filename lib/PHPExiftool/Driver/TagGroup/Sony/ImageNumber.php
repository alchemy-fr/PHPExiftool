<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageNumber extends AbstractTagGroup
{

  protected string $id = 'Sony:ImageNumber';

  protected string $name = 'ImageNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Number',
    'fr' => 'Numéro d\'image',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings
       * line : 348663
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings.Sony:ImageNumber',
      'desc' => [
        'en' => 'Image Number',
        'fr' => 'Numéro d\'image',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351609
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:ImageNumber',
      'desc' => [
        'en' => 'Image Number',
        'fr' => 'Numéro d\'image',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351771
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:ImageNumber',
      'desc' => [
        'en' => 'Image Number',
        'fr' => 'Numéro d\'image',
      ],
    ],
    3 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 352406
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:ImageNumber',
      'desc' => [
        'en' => 'Image Number',
        'fr' => 'Numéro d\'image',
      ],
    ],
  ];

}
