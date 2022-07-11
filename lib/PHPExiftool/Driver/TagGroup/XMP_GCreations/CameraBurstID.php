<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GCreations;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraBurstID extends AbstractTagGroup
{

  protected string $id = 'XMP-GCreations:CameraBurstID';

  protected string $name = 'CameraBurstID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Burst ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GCreations
       * line : 397250
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GCreations.XMP-GCreations:CameraBurstID',
      'desc' => [
        'en' => 'Camera Burst ID',
      ],
    ],
  ];

}
