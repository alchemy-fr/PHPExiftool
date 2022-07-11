<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BodySerialNumber extends AbstractTagGroup
{

  protected string $id = 'Ricoh:BodySerialNumber';

  protected string $name = 'BodySerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Body Serial Number',
  ];

  protected int $count = 16;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::SerialInfo
       * line : 334056
       * type : string
       * writable : true
       * count : 16
       * flags : Permanent
       */
      'id' => 'Ricoh::SerialInfo.Ricoh:BodySerialNumber',
      'desc' => [
        'en' => 'Body Serial Number',
      ],
    ],
  ];

}
