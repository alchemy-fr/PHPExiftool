<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HueAdjustment extends AbstractTagGroup
{

  protected string $id = 'Nikon:HueAdjustment';

  protected string $name = 'HueAdjustment';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Hue Adjustment',
    'fr' => 'Teinte',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197747
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:HueAdjustment',
      'desc' => [
        'en' => 'Hue Adjustment',
        'fr' => 'Teinte',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 204095
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:HueAdjustment',
      'desc' => [
        'en' => 'Hue Adjustment',
        'fr' => 'Teinte',
      ],
    ],
  ];

}
