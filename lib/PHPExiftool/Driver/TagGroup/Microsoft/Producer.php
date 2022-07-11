<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Producer extends AbstractTagGroup
{

  protected string $id = 'Microsoft:Producer';

  protected string $name = 'Producer';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Producer',
    'fr' => 'Producteur',
  ];

  protected int $count = 0;

  protected int $flags = 65;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 175520
       * type : Unicode
       * writable : true
       * count : 
       * flags : Avoid,List
       */
      'id' => 'Microsoft::Xtra.Microsoft:Producer',
      'desc' => [
        'en' => 'Producer',
        'fr' => 'Producteur',
      ],
    ],
  ];

}
