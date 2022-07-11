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
class PartOfSet extends AbstractTagGroup
{

  protected string $id = 'Microsoft:PartOfSet';

  protected string $name = 'PartOfSet';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Part Of Set',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 175070
       * type : ?
       * writable : false
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:PartOfSet',
      'desc' => [
        'en' => 'Part Of Set',
      ],
    ],
    1 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 175512
       * type : ?
       * writable : false
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:PartOfSet',
      'desc' => [
        'en' => 'Part Of Set',
      ],
    ],
    2 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 176105
       * type : ?
       * writable : false
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:PartOfSet',
      'desc' => [
        'en' => 'Part Of Set',
      ],
    ],
  ];

}
