<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Reserved5 extends AbstractTagGroup
{

  protected string $id = 'File:Reserved5';

  protected string $name = 'Reserved5';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Reserved 5',
  ];

  protected int $count = 76;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 106271
       * type : string
       * writable : false
       * count : 76
       * flags : Unknown
       */
      'id' => 'DPX::Main.File:Reserved5',
      'desc' => [
        'en' => 'Reserved 5',
      ],
    ],
  ];

}
