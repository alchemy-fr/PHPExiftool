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
class ZipFileNameLength extends AbstractTagGroup
{

  protected string $id = 'ZIP:ZipFileNameLength';

  protected string $name = 'ZipFileNameLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Zip File Name Length',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ZIP::Main
       * line : 415278
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ZIP::Main.ZIP:ZipFileNameLength',
      'desc' => [
        'en' => 'Zip File Name Length',
      ],
    ],
  ];

}
