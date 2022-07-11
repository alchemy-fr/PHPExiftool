<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PICT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DirectBitsRgn extends AbstractTagGroup
{

  protected string $id = 'PICT:DirectBitsRgn';

  protected string $name = 'DirectBitsRgn';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Direct Bits Rgn',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265351
       * type : DirectBitsRgn
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PICT::Main.PICT:DirectBitsRgn',
      'desc' => [
        'en' => 'Direct Bits Rgn',
      ],
    ],
  ];

}
