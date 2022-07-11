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
class PhotoshopQuality extends AbstractTagGroup
{

  protected string $id = 'Photoshop:PhotoshopQuality';

  protected string $name = 'PhotoshopQuality';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Photoshop Quality',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::JPEG_Quality
       * line : 305493
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::JPEG_Quality.Photoshop:PhotoshopQuality',
      'desc' => [
        'en' => 'Photoshop Quality',
      ],
    ],
  ];

}
