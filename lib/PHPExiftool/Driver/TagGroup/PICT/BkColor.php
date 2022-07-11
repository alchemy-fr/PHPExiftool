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
class BkColor extends AbstractTagGroup
{

  protected string $id = 'PICT:BkColor';

  protected string $name = 'BkColor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Background Color',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265000
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PICT::Main.PICT:BkColor',
      'desc' => [
        'en' => 'Background Color',
      ],
    ],
  ];

}
