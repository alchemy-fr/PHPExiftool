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
class BMPVersion extends AbstractTagGroup
{

  protected string $id = 'File:BMPVersion';

  protected string $name = 'BMPVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'BMP Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3181
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::Main.File:BMPVersion',
      'desc' => [
        'en' => 'BMP Version',
      ],
    ],
    1 => [
      /**
       * table_name : BMP::OS2
       * line : 3484
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::OS2.File:BMPVersion',
      'desc' => [
        'en' => 'BMP Version',
      ],
    ],
  ];

}
