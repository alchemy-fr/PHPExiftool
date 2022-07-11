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
class LineJustify extends AbstractTagGroup
{

  protected string $id = 'PICT:LineJustify';

  protected string $name = 'LineJustify';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Line Justify',
  ];

  protected int $count = 10;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265094
       * type : int8u
       * writable : false
       * count : 10
       * flags : 
       */
      'id' => 'PICT::Main.PICT:LineJustify',
      'desc' => [
        'en' => 'Line Justify',
      ],
    ],
  ];

}
