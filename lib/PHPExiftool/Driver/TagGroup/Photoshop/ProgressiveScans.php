<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProgressiveScans extends AbstractTagGroup
{

  protected string $id = 'Photoshop:ProgressiveScans';

  protected string $name = 'ProgressiveScans';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Progressive Scans',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::JPEG_Quality
       * line : 305524
       * type : int16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::JPEG_Quality.Photoshop:ProgressiveScans',
      'desc' => [
        'en' => 'Progressive Scans',
      ],
    ],
  ];

}
