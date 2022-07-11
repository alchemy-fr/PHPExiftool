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
class Planes extends AbstractTagGroup
{

  protected string $id = 'File:Planes';

  protected string $name = 'Planes';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Planes',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3236
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::Main.File:Planes',
      'desc' => [
        'en' => 'Planes',
      ],
    ],
    1 => [
      /**
       * table_name : BMP::OS2
       * line : 3532
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::OS2.File:Planes',
      'desc' => [
        'en' => 'Planes',
      ],
    ],
  ];

}
