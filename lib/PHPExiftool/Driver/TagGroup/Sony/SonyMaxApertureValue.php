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
class SonyMaxApertureValue extends AbstractTagGroup
{

  protected string $id = 'Sony:SonyMaxApertureValue';

  protected string $name = 'SonyMaxApertureValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sony Max Aperture Value',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 387954
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:SonyMaxApertureValue',
      'desc' => [
        'en' => 'Sony Max Aperture Value',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9416
       * line : 391407
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9416.Sony:SonyMaxApertureValue',
      'desc' => [
        'en' => 'Sony Max Aperture Value',
      ],
    ],
  ];

}
