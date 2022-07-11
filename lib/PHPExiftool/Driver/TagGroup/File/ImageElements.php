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
class ImageElements extends AbstractTagGroup
{

  protected string $id = 'File:ImageElements';

  protected string $name = 'ImageElements';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Elements',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 105878
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DPX::Main.File:ImageElements',
      'desc' => [
        'en' => 'Image Elements',
      ],
    ],
  ];

}
