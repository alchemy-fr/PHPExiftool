<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateCompleted extends AbstractTagGroup
{

  protected string $id = 'XML:DateCompleted';

  protected string $name = 'DateCompleted';

  protected ?string $phpType = 'date';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Date Completed',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : OOXML::Main
       * line : 249409
       * type : date
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'OOXML::Main.XML:DateCompleted',
      'desc' => [
        'en' => 'Date Completed',
      ],
    ],
  ];

}
