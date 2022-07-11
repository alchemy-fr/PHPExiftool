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
class RawImageCenter extends AbstractTagGroup
{

  protected string $id = 'Nikon:RawImageCenter';

  protected string $name = 'RawImageCenter';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Image Center',
    'fr' => 'Centre Image RAW',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197852
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:RawImageCenter',
      'desc' => [
        'en' => 'Raw Image Center',
        'fr' => 'Centre Image RAW',
      ],
    ],
  ];

}
