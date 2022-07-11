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
class UnknownSerial3 extends AbstractTagGroup
{

  protected string $id = 'FLIR:UnknownSerial3';

  protected string $name = 'UnknownSerial3';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Unknown Serial 3',
  ];

  protected int $count = 33;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::SerialNums
       * line : 124045
       * type : string
       * writable : false
       * count : 33
       * flags : Permanent,Unknown
       */
      'id' => 'FLIR::SerialNums.FLIR:UnknownSerial3',
      'desc' => [
        'en' => 'Unknown Serial 3',
      ],
    ],
  ];

}
