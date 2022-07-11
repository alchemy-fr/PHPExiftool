<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UnknownTemperature extends AbstractTagGroup
{

  protected string $id = 'FLIR:UnknownTemperature';

  protected string $name = 'UnknownTemperature';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unknown Temperature',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::Main
       * line : 123562
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'FLIR::Main.FLIR:UnknownTemperature',
      'desc' => [
        'en' => 'Unknown Temperature',
      ],
    ],
  ];

}
