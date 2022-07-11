<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_MP1;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalance1 extends AbstractTagGroup
{

  protected string $id = 'XMP-MP1:WhiteBalance1';

  protected string $name = 'WhiteBalance1';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'White Balance 1',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::MP1
       * line : 174577
       * type : real
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Microsoft::MP1.XMP-MP1:WhiteBalance1',
      'desc' => [
        'en' => 'White Balance 1',
      ],
    ],
  ];

}
