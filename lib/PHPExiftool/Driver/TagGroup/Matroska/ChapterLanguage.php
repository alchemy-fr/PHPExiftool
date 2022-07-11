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
class ChapterLanguage extends AbstractTagGroup
{

  protected string $id = 'Matroska:ChapterLanguage';

  protected string $name = 'ChapterLanguage';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Chapter Language',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 173802
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Matroska::Main.Matroska:ChapterLanguage',
      'desc' => [
        'en' => 'Chapter Language',
      ],
    ],
  ];

}
