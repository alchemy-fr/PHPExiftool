<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Creator extends AbstractTagGroup
{

  protected string $id = 'PDF:Creator';

  protected string $name = 'Creator';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Creator',
    'fr' => 'Créateur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Info
       * line : 264528
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PDF::Info.PDF:Creator',
      'desc' => [
        'en' => 'Creator',
        'fr' => 'Créateur',
      ],
    ],
  ];

}
