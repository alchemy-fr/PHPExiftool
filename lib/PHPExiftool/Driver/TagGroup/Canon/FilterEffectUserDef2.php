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
class FilterEffectUserDef2 extends AbstractTagGroup
{

  protected string $id = 'Canon:FilterEffectUserDef2';

  protected string $name = 'FilterEffectUserDef2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Filter Effect User Def 2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::PSInfo
       * line : 67764
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo.Canon:FilterEffectUserDef2',
      'desc' => [
        'en' => 'Filter Effect User Def 2',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 68942
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo2.Canon:FilterEffectUserDef2',
      'desc' => [
        'en' => 'Filter Effect User Def 2',
      ],
    ],
  ];

}
