<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MakerNoteType extends AbstractTagGroup
{

  protected string $id = 'Nikon:MakerNoteType';

  protected string $name = 'MakerNoteType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Maker Note Type',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVIVers
       * line : 192208
       * type : string
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AVIVers.Nikon:MakerNoteType',
      'desc' => [
        'en' => 'Maker Note Type',
      ],
    ],
  ];

}
