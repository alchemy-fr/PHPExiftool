<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BitDepth extends AbstractTagGroup
{

  protected string $id = 'PNG:BitDepth';

  protected string $name = 'BitDepth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Bit Depth',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::ImageHeader
       * line : 272771
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PNG::ImageHeader.PNG:BitDepth',
      'desc' => [
        'en' => 'Bit Depth',
      ],
    ],
  ];

}
