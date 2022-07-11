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
class ToningEffectUserDef3 extends AbstractTagGroup
{

  protected string $id = 'Canon:ToningEffectUserDef3';

  protected string $name = 'ToningEffectUserDef3';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Toning Effect User Def 3',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::PSInfo
       * line : 67926
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo.Canon:ToningEffectUserDef3',
      'desc' => [
        'en' => 'Toning Effect User Def 3',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 69104
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo2.Canon:ToningEffectUserDef3',
      'desc' => [
        'en' => 'Toning Effect User Def 3',
      ],
    ],
  ];

}
