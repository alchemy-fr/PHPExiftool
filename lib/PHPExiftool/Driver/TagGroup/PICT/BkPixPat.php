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
class BkPixPat extends AbstractTagGroup
{

  protected string $id = 'PICT:BkPixPat';

  protected string $name = 'BkPixPat';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Background Pixel Pattern',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265011
       * type : PixPat
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PICT::Main.PICT:BkPixPat',
      'desc' => [
        'en' => 'Background Pixel Pattern',
      ],
    ],
  ];

}
