<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShutterSpeedValue extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:ShutterSpeedValue';

  protected string $name = 'ShutterSpeedValue';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shutter Speed Value',
    'fr' => 'Vitesse d\'obturation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 114472
       * type : rational64s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:ShutterSpeedValue',
      'desc' => [
        'en' => 'Shutter Speed Value',
        'fr' => 'Vitesse d\'obturation',
      ],
    ],
  ];

}
