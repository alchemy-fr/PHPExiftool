<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSDifferential extends AbstractTagGroup
{

  protected string $id = 'MIE-GPS:GPSDifferential';

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
       * table_name : MIE::GPS
       * line : 163874
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::GPS.MIE-GPS:GPSDifferential',
      'desc' => [
        'en' => 'GPS Differential',
        'fr' => 'Correction différentielle GPS',
      ],
    ],
  ];

}
