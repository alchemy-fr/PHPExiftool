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
class TxRatio extends AbstractTagGroup
{

  protected string $id = 'PICT:TxRatio';

  protected string $name = 'TxRatio';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Text Ratio',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265005
       * type : Rect
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PICT::Main.PICT:TxRatio',
      'desc' => [
        'en' => 'Text Ratio',
      ],
    ],
  ];

}
