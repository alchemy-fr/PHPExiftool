<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_MDPR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileID extends AbstractTagGroup
{

  protected string $id = 'Real-MDPR:FileID';

  protected string $name = 'FileID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::FileInfo
       * line : 330619
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::FileInfo.Real-MDPR:FileID',
      'desc' => [
        'en' => 'File ID',
      ],
    ],
  ];

}
