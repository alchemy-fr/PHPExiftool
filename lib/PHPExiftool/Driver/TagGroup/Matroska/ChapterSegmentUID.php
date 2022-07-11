<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChapterSegmentUID extends AbstractTagGroup
{

  protected string $id = 'Matroska:ChapterSegmentUID';

  protected string $name = 'ChapterSegmentUID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Chapter Segment UID',
  ];

  protected int $count = 0;

  protected int $flags = 34;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 174212
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Unknown
       */
      'id' => 'Matroska::Main.Matroska:ChapterSegmentUID',
      'desc' => [
        'en' => 'Chapter Segment UID',
      ],
    ],
  ];

}
