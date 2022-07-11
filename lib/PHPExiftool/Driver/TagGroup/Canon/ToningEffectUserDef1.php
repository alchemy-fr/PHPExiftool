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
class ToningEffectUserDef1 extends AbstractTagGroup
{

  protected string $id = 'Canon:ToningEffectUserDef1';

  protected string $name = 'ToningEffectUserDef1';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Toning Effect User Def 1',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::PSInfo
       * line : 67678
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo.Canon:ToningEffectUserDef1',
      'desc' => [
        'en' => 'Toning Effect User Def 1',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 68856
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo2.Canon:ToningEffectUserDef1',
      'desc' => [
        'en' => 'Toning Effect User Def 1',
      ],
    ],
  ];

}
