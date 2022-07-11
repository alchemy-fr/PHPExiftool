<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ZIP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileNameLength extends AbstractTagGroup
{

  protected string $id = 'ZIP:FileNameLength';

  protected string $name = 'FileNameLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File Name Length',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ZIP::RAR
       * line : 415379
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ZIP::RAR.ZIP:FileNameLength',
      'desc' => [
        'en' => 'File Name Length',
      ],
    ],
  ];

}
