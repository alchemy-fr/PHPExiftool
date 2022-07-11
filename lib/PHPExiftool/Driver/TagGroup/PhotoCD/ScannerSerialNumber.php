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
class ScannerSerialNumber extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:ScannerSerialNumber';

  protected string $name = 'ScannerSerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scanner Serial Number',
  ];

  protected int $count = 20;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 304121
       * type : string
       * writable : false
       * count : 20
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:ScannerSerialNumber',
      'desc' => [
        'en' => 'Scanner Serial Number',
      ],
    ],
  ];

}
