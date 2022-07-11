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
class ScannerVendorID extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:ScannerVendorID';

  protected string $name = 'ScannerVendorID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scanner Vendor ID',
  ];

  protected int $count = 20;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 304109
       * type : string
       * writable : false
       * count : 20
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:ScannerVendorID',
      'desc' => [
        'en' => 'Scanner Vendor ID',
      ],
    ],
  ];

}
