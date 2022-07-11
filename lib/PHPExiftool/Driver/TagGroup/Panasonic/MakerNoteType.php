<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MakerNoteType extends AbstractTagGroup
{

  protected string $id = 'Panasonic:MakerNoteType';

  protected string $name = 'MakerNoteType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Maker Note Type',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Type2
       * line : 280008
       * type : string
       * writable : false
       * count : 4
       * flags : Permanent
       */
      'id' => 'Panasonic::Type2.Panasonic:MakerNoteType',
      'desc' => [
        'en' => 'Maker Note Type',
      ],
    ],
  ];

}
