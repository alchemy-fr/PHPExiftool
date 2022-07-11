<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoCD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ScannerPixelSize extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:ScannerPixelSize';

  protected string $name = 'ScannerPixelSize';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scanner Pixel Size',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 304124
       * type : undef
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:ScannerPixelSize',
      'desc' => [
        'en' => 'Scanner Pixel Size',
      ],
    ],
  ];

}
