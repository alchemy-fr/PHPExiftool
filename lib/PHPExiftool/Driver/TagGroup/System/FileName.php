<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\System;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileName extends AbstractTagGroup
{

  protected string $id = 'System:FileName';

  protected string $name = 'FileName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'File Name',
    'fr' => 'Nom de fichier',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121635
       * type : ?
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Extra.System:FileName',
      'desc' => [
        'en' => 'File Name',
        'fr' => 'Nom de fichier',
      ],
    ],
  ];

}
