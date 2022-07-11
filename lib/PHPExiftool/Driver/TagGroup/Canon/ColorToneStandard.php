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
class ColorToneStandard extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorToneStandard';

  protected string $name = 'ColorToneStandard';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Tone Standard',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 34634
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:ColorToneStandard',
      'desc' => [
        'en' => 'Color Tone Standard',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo
       * line : 67093
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo.Canon:ColorToneStandard',
      'desc' => [
        'en' => 'Color Tone Standard',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 68191
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo2.Canon:ColorToneStandard',
      'desc' => [
        'en' => 'Color Tone Standard',
      ],
    ],
  ];

}
