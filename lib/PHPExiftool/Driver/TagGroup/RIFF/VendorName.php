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
class VendorName extends AbstractTagGroup
{

  protected string $id = 'RIFF:VendorName';

  protected string $name = 'VendorName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Vendor Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::StreamData
       * line : 329102
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::StreamData.RIFF:VendorName',
      'desc' => [
        'en' => 'Vendor Name',
      ],
    ],
  ];

}
