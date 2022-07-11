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
class GPSDateTime extends AbstractTagGroup
{

  protected string $id = 'RIFF:GPSDateTime';

  protected string $name = 'GPSDateTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GPS Date/Time',
    'fr' => 'Date/heure GPS (horloge atomique)',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::UserText
       * line : 329269
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::UserText.RIFF:GPSDateTime',
      'desc' => [
        'en' => 'GPS Date/Time',
        'fr' => 'Date/heure GPS (horloge atomique)',
      ],
    ],
  ];

}
