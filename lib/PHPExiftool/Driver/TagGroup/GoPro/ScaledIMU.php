<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ScaledIMU extends AbstractTagGroup
{

  protected string $id = 'GoPro:ScaledIMU';

  protected string $name = 'ScaledIMU';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scaled IMU',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::GPMF
       * line : 140112
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GoPro::GPMF.GoPro:ScaledIMU',
      'desc' => [
        'en' => 'Scaled IMU',
      ],
    ],
  ];

}
