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
class TxMode extends AbstractTagGroup
{

  protected string $id = 'PICT:TxMode';

  protected string $name = 'TxMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Text Source Mode',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 264966
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PICT::Main.PICT:TxMode',
      'desc' => [
        'en' => 'Text Source Mode',
      ],
    ],
  ];

}
