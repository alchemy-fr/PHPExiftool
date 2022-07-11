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
class SharpnessUserDef3 extends AbstractTagGroup
{

  protected string $id = 'Canon:SharpnessUserDef3';

  protected string $name = 'SharpnessUserDef3';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sharpness User Def 3',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo5D
       * line : 34526
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo5D.Canon:SharpnessUserDef3',
      'desc' => [
        'en' => 'Sharpness User Def 3',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo
       * line : 67850
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo.Canon:SharpnessUserDef3',
      'desc' => [
        'en' => 'Sharpness User Def 3',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 69028
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo2.Canon:SharpnessUserDef3',
      'desc' => [
        'en' => 'Sharpness User Def 3',
      ],
    ],
  ];

}
