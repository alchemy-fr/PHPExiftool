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
class People extends AbstractTagGroup
{

  protected string $id = 'XMP-mediapro:People';

  protected string $name = 'People';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'People',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::MediaPro
       * line : 397765
       * type : string
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'XMP::MediaPro.XMP-mediapro:People',
      'desc' => [
        'en' => 'People',
      ],
    ],
  ];

}
