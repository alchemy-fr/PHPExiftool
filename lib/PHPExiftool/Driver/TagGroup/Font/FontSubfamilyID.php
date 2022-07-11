<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FontSubfamilyID extends AbstractTagGroup
{

  protected string $id = 'Font:FontSubfamilyID';

  protected string $name = 'FontSubfamilyID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Font Subfamily ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::Name
       * line : 128207
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::Name.Font:FontSubfamilyID',
      'desc' => [
        'en' => 'Font Subfamily ID',
      ],
    ],
  ];

}
