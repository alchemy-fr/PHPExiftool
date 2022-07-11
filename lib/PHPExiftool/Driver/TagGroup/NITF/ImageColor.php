<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NITF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageColor extends AbstractTagGroup
{

  protected string $id = 'NITF:ImageColor';

  protected string $name = 'ImageColor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Color',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::NITF
       * line : 153127
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::NITF.NITF:ImageColor',
      'desc' => [
        'en' => 'Image Color',
      ],
    ],
  ];

}
