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
class ImageLength extends AbstractTagGroup
{

  protected string $id = 'File:ImageLength';

  protected string $name = 'ImageLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Length',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3314
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::Main.File:ImageLength',
      'desc' => [
        'en' => 'Image Length',
      ],
    ],
    1 => [
      /**
       * table_name : BPG::Main
       * line : 3728
       * type : var_ue7
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BPG::Main.File:ImageLength',
      'desc' => [
        'en' => 'Image Length',
      ],
    ],
  ];

}
