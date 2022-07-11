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
class Duration extends AbstractTagGroup
{

  protected string $id = 'Microsoft:Duration';

  protected string $name = 'Duration';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Duration',
    'fr' => 'Durée',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 174945
       * type : ?
       * writable : false
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:Duration',
      'desc' => [
        'en' => 'Duration',
        'fr' => 'Durée',
      ],
    ],
    1 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 175971
       * type : ?
       * writable : false
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:Duration',
      'desc' => [
        'en' => 'Duration',
        'fr' => 'Durée',
      ],
    ],
    2 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 176195
       * type : ?
       * writable : false
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:Duration',
      'desc' => [
        'en' => 'Duration',
        'fr' => 'Durée',
      ],
    ],
  ];

}
