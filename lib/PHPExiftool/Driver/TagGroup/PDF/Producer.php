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
class Producer extends AbstractTagGroup
{

  protected string $id = 'PDF:Producer';

  protected string $name = 'Producer';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Producer',
    'fr' => 'Producteur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Info
       * line : 264574
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PDF::Info.PDF:Producer',
      'desc' => [
        'en' => 'Producer',
        'fr' => 'Producteur',
      ],
    ],
  ];

}
