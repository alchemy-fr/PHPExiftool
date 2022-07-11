<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Audible;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChapterNumber extends AbstractTagGroup
{

  protected string $id = 'Audible:ChapterNumber';

  protected string $name = 'ChapterNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Chapter Number',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Audible::tseg
       * line : 3157
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Audible::tseg.Audible:ChapterNumber',
      'desc' => [
        'en' => 'Chapter Number',
      ],
    ],
  ];

}
