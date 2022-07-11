<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawData extends AbstractTagGroup
{

  protected string $id = 'Samsung:RawData';

  protected string $name = 'RawData';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Data',
  ];

  protected int $count = 12;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335951
       * type : int32s
       * writable : true
       * count : 12
       * flags : Permanent,Unknown
       */
      'id' => 'Samsung::Type2.Samsung:RawData',
      'desc' => [
        'en' => 'Raw Data',
      ],
    ],
  ];

}
