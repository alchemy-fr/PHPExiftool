<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContrastFaithful extends AbstractTagGroup
{

  protected string $id = 'Canon:ContrastFaithful';

  protected string $name = 'ContrastFaithful';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Contrast Faithful',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 34453
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:ContrastFaithful',
      'desc' => [
        'en' => 'Contrast Faithful',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo
       * line : 67358
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo.Canon:ContrastFaithful',
      'desc' => [
        'en' => 'Contrast Faithful',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 68456
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo2.Canon:ContrastFaithful',
      'desc' => [
        'en' => 'Contrast Faithful',
      ],
    ],
  ];

}
