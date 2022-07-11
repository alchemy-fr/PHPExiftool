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
class Subtitle extends AbstractTagGroup
{

  protected string $id = 'Microsoft:Subtitle';

  protected string $name = 'Subtitle';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Subtitle',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 175558
       * type : Unicode
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:Subtitle',
      'desc' => [
        'en' => 'Subtitle',
      ],
    ],
    1 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 176109
       * type : ?
       * writable : false
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:Subtitle',
      'desc' => [
        'en' => 'Subtitle',
      ],
    ],
  ];

}
