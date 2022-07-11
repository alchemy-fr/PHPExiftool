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
class Language extends AbstractTagGroup
{

  protected string $id = 'Microsoft:Language';

  protected string $name = 'Language';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Language',
    'fr' => 'Langage',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 175398
       * type : ?
       * writable : false
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:Language',
      'desc' => [
        'en' => 'Language',
        'fr' => 'Langage',
      ],
    ],
    1 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 176701
       * type : ?
       * writable : false
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:Language',
      'desc' => [
        'en' => 'Language',
        'fr' => 'Langage',
      ],
    ],
  ];

}
