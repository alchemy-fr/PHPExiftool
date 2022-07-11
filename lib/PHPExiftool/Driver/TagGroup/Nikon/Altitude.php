<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Altitude extends AbstractTagGroup
{

  protected string $id = 'Nikon:Altitude';

  protected string $name = 'Altitude';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Altitude',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::BarometerInfo
       * line : 192233
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::BarometerInfo.Nikon:Altitude',
      'desc' => [
        'en' => 'Altitude',
      ],
    ],
  ];

}
