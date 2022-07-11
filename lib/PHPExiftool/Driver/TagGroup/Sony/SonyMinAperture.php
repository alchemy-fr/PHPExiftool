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
class SonyMinAperture extends AbstractTagGroup
{

  protected string $id = 'Sony:SonyMinAperture';

  protected string $name = 'SonyMinAperture';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sony Min Aperture',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379414
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:SonyMinAperture',
      'desc' => [
        'en' => 'Sony Min Aperture',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9050b
       * line : 381636
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050b.Sony:SonyMinAperture',
      'desc' => [
        'en' => 'Sony Min Aperture',
      ],
    ],
  ];

}
