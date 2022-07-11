<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_drone_dji;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Longitude extends AbstractTagGroup
{

  protected string $id = 'XMP-drone-dji:Longitude';

  protected string $name = 'Longitude';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Longitude',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DJI::XMP
       * line : 105056
       * type : real
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'DJI::XMP.XMP-drone-dji:Longitude',
      'desc' => [
        'en' => 'Longitude',
      ],
    ],
  ];

}
