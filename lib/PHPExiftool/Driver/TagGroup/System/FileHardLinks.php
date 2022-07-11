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
class FileHardLinks extends AbstractTagGroup
{

  protected string $id = 'System:FileHardLinks';

  protected string $name = 'FileHardLinks';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File Hard Links',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121605
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.System:FileHardLinks',
      'desc' => [
        'en' => 'File Hard Links',
      ],
    ],
  ];

}
