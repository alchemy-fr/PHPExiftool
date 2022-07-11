<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_mediapro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Status extends AbstractTagGroup
{

  protected string $id = 'XMP-mediapro:Status';

  protected string $name = 'Status';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Status',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::MediaPro
       * line : 397772
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::MediaPro.XMP-mediapro:Status',
      'desc' => [
        'en' => 'Status',
      ],
    ],
  ];

}
