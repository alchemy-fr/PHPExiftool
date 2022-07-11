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
class GPSSpeedZ extends AbstractTagGroup
{

  protected string $id = 'GoPro:GPSSpeedZ';

  protected string $name = 'GPSSpeedZ';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Speed Z',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::GLPI
       * line : 139710
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GoPro::GLPI.GoPro:GPSSpeedZ',
      'desc' => [
        'en' => 'GPS Speed Z',
      ],
    ],
  ];

}
