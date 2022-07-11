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
class LensE_mountVersion extends AbstractTagGroup
{

  protected string $id = 'Sony:LensE-mountVersion';

  protected string $name = 'LensE-mountVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens E-mount Version',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351788
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:LensE-mountVersion',
      'desc' => [
        'en' => 'Lens E-mount Version',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Tag940c
       * line : 391347
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag940c.Sony:LensE-mountVersion',
      'desc' => [
        'en' => 'Lens E-mount Version',
      ],
    ],
  ];

}
