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
class DistortionCorrection extends AbstractTagGroup
{

  protected string $id = 'Sony:DistortionCorrection';

  protected string $name = 'DistortionCorrection';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Distortion Correction',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9405a
       * line : 385941
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405a.Sony:DistortionCorrection',
      'desc' => [
        'en' => 'Distortion Correction',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag9405b
       * line : 388583
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag9405b.Sony:DistortionCorrection',
      'desc' => [
        'en' => 'Distortion Correction',
      ],
    ],
  ];

}
