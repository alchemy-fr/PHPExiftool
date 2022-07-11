<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReverseShutterSpeedAperture extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:ReverseShutterSpeedAperture';

  protected string $name = 'ReverseShutterSpeedAperture';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Reverse Shutter Speed Aperture',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD5200
       * line : 223752
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5200.NikonCustom:ReverseShutterSpeedAperture',
      'desc' => [
        'en' => 'Reverse Shutter Speed Aperture',
      ],
    ],
  ];

}
