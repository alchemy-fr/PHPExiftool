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
class XClipPathUnits extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:XClipPathUnits';

  protected string $name = 'XClipPathUnits';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'X Clip Path Units',
    'fr' => 'Unités de chemin de rognage en X',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 112348
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:XClipPathUnits',
      'desc' => [
        'en' => 'X Clip Path Units',
        'fr' => 'Unités de chemin de rognage en X',
      ],
    ],
  ];

}
