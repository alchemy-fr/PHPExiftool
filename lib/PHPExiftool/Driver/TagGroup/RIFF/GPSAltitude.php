<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSAltitude extends AbstractTagGroup
{

  protected string $id = 'RIFF:GPSAltitude';

  protected string $name = 'GPSAltitude';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Altitude',
    'fr' => 'Altitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::UserText
       * line : 329193
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::UserText.RIFF:GPSAltitude',
      'desc' => [
        'en' => 'GPS Altitude',
        'fr' => 'Altitude',
      ],
    ],
  ];

}
