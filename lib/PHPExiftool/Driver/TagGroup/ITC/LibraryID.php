<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ITC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LibraryID extends AbstractTagGroup
{

  protected string $id = 'ITC:LibraryID';

  protected string $name = 'LibraryID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Library ID',
  ];

  protected int $count = 8;

  protected array $tags = [
    0 => [
      /**
       * table_name : ITC::Item
       * line : 152456
       * type : undef
       * writable : false
       * count : 8
       * flags : 
       */
      'id' => 'ITC::Item.ITC:LibraryID',
      'desc' => [
        'en' => 'Library ID',
      ],
    ],
  ];

}
