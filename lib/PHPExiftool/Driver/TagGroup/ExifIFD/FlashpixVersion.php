<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashpixVersion extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:FlashpixVersion';

  protected string $name = 'FlashpixVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flashpix Version',
    'fr' => 'Version Flashpix supportée',
  ];

  protected int $count = 0;

  protected int $flags = 128;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 116733
       * type : undef
       * writable : true
       * count : 
       * flags : Mandatory
       */
      'id' => 'Exif::Main.ExifIFD:FlashpixVersion',
      'desc' => [
        'en' => 'Flashpix Version',
        'fr' => 'Version Flashpix supportée',
      ],
    ],
  ];

}
