<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProfileHueSatMapDims extends AbstractTagGroup
{

  protected string $id = 'IFD0:ProfileHueSatMapDims';

  protected string $name = 'ProfileHueSatMapDims';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Profile Hue Sat Map Dims',
    'fr' => 'Divisions de teinte',
  ];

  protected int $count = 3;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120449
       * type : int32u
       * writable : true
       * count : 3
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:ProfileHueSatMapDims',
      'desc' => [
        'en' => 'Profile Hue Sat Map Dims',
        'fr' => 'Divisions de teinte',
      ],
    ],
  ];

}
