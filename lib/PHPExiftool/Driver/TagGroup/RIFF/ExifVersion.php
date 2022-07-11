<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExifVersion extends AbstractTagGroup
{

  protected string $id = 'RIFF:ExifVersion';

  protected string $name = 'ExifVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Exif Version',
    'fr' => 'Version Exif',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Exif
       * line : 328280
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Exif.RIFF:ExifVersion',
      'desc' => [
        'en' => 'Exif Version',
        'fr' => 'Version Exif',
      ],
    ],
  ];

}
