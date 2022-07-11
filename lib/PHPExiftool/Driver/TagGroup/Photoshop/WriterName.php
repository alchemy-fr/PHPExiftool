<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WriterName extends AbstractTagGroup
{

  protected string $id = 'Photoshop:WriterName';

  protected string $name = 'WriterName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Writer Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::VersionInfo
       * line : 306203
       * type : var_ustr32
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::VersionInfo.Photoshop:WriterName',
      'desc' => [
        'en' => 'Writer Name',
      ],
    ],
  ];

}
