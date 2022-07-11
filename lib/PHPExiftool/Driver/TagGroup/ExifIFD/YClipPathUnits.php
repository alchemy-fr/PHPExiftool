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
class YClipPathUnits extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:YClipPathUnits';

  protected string $name = 'YClipPathUnits';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Y Clip Path Units',
    'fr' => 'Unités de chemin de rognage en Y',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 112357
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:YClipPathUnits',
      'desc' => [
        'en' => 'Y Clip Path Units',
        'fr' => 'Unités de chemin de rognage en Y',
      ],
    ],
  ];

}
