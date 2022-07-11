<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPEG_HDR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RatioImage extends AbstractTagGroup
{

  protected string $id = 'JPEG-HDR:RatioImage';

  protected string $name = 'RatioImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Ratio Image',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::HDR
       * line : 152807
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'JPEG::HDR.JPEG-HDR:RatioImage',
      'desc' => [
        'en' => 'Ratio Image',
      ],
    ],
  ];

}
