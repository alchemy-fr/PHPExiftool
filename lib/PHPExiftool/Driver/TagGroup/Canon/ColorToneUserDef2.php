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
class ColorToneUserDef2 extends AbstractTagGroup
{

  protected string $id = 'Canon:ColorToneUserDef2';

  protected string $name = 'ColorToneUserDef2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Tone User Def 2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 34731
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:ColorToneUserDef2',
      'desc' => [
        'en' => 'Color Tone User Def 2',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo
       * line : 67750
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo.Canon:ColorToneUserDef2',
      'desc' => [
        'en' => 'Color Tone User Def 2',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 68928
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo2.Canon:ColorToneUserDef2',
      'desc' => [
        'en' => 'Color Tone User Def 2',
      ],
    ],
  ];

}
