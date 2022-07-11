<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileTypeExtension extends AbstractTagGroup
{

  protected string $id = 'File:FileTypeExtension';

  protected string $name = 'FileTypeExtension';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File Type Extension',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121706
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:FileTypeExtension',
      'desc' => [
        'en' => 'File Type Extension',
      ],
    ],
  ];

}
