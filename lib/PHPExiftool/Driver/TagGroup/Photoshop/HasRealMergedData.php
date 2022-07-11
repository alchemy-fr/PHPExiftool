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
class HasRealMergedData extends AbstractTagGroup
{

  protected string $id = 'Photoshop:HasRealMergedData';

  protected string $name = 'HasRealMergedData';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Has Real Merged Data',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::VersionInfo
       * line : 306189
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::VersionInfo.Photoshop:HasRealMergedData',
      'desc' => [
        'en' => 'Has Real Merged Data',
      ],
    ],
  ];

}
