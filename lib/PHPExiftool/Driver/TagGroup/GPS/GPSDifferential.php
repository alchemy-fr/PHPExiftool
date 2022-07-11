<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSDifferential extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSDifferential';

  protected string $name = 'GPSDifferential';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Differential',
    'fr' => 'Correction différentielle GPS',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 133010
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSDifferential',
      'desc' => [
        'en' => 'GPS Differential',
        'fr' => 'Correction différentielle GPS',
      ],
    ],
  ];

}
