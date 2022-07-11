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
class ReaderName extends AbstractTagGroup
{

  protected string $id = 'Photoshop:ReaderName';

  protected string $name = 'ReaderName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Reader Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::VersionInfo
       * line : 306207
       * type : var_ustr32
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::VersionInfo.Photoshop:ReaderName',
      'desc' => [
        'en' => 'Reader Name',
      ],
    ],
  ];

}
