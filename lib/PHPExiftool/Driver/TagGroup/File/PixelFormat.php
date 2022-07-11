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
class PixelFormat extends AbstractTagGroup
{

  protected string $id = 'File:PixelFormat';

  protected string $name = 'PixelFormat';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Pixel Format',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : BPG::Main
       * line : 3561
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BPG::Main.File:PixelFormat',
      'desc' => [
        'en' => 'Pixel Format',
      ],
    ],
  ];

}
