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
class ScannerProductID extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:ScannerProductID';

  protected string $name = 'ScannerProductID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scanner Product ID',
  ];

  protected int $count = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 304112
       * type : string
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:ScannerProductID',
      'desc' => [
        'en' => 'Scanner Product ID',
      ],
    ],
  ];

}
