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
class UnknownNumber extends AbstractTagGroup
{

  protected string $id = 'FLIR:UnknownNumber';

  protected string $name = 'UnknownNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Unknown Number',
  ];

  protected int $count = 3;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::SerialNums
       * line : 124051
       * type : string
       * writable : false
       * count : 3
       * flags : Permanent,Unknown
       */
      'id' => 'FLIR::SerialNums.FLIR:UnknownNumber',
      'desc' => [
        'en' => 'Unknown Number',
      ],
    ],
  ];

}
