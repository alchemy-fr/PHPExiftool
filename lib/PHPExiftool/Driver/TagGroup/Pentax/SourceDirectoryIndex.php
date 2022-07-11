<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SourceDirectoryIndex extends AbstractTagGroup
{

  protected string $id = 'Pentax:SourceDirectoryIndex';

  protected string $name = 'SourceDirectoryIndex';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Source Directory Index',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::FilterInfo
       * line : 286265
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::FilterInfo.Pentax:SourceDirectoryIndex',
      'desc' => [
        'en' => 'Source Directory Index',
      ],
    ],
  ];

}
