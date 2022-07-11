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
class FileGUID extends AbstractTagGroup
{

  protected string $id = 'File:FileGUID';

  protected string $name = 'FileGUID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File GUID',
  ];

  protected int $count = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : ZISRAW::Main
       * line : 415398
       * type : undef
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'ZISRAW::Main.File:FileGUID',
      'desc' => [
        'en' => 'File GUID',
      ],
    ],
  ];

}
