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
class UnknownTemperature2 extends AbstractTagGroup
{

  protected string $id = 'FLIR:UnknownTemperature2';

  protected string $name = 'UnknownTemperature2';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Unknown Temperature 2',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::MoreInfo
       * line : 123814
       * type : float
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'FLIR::MoreInfo.FLIR:UnknownTemperature2',
      'desc' => [
        'en' => 'Unknown Temperature 2',
      ],
    ],
  ];

}
