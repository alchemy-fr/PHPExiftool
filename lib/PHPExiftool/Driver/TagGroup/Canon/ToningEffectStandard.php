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
class ToningEffectStandard extends AbstractTagGroup
{

  protected string $id = 'Canon:ToningEffectStandard';

  protected string $name = 'ToningEffectStandard';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Toning Effect Standard',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::PSInfo
       * line : 67119
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::PSInfo.Canon:ToningEffectStandard',
      'desc' => [
        'en' => 'Toning Effect Standard',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 68217
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::PSInfo2.Canon:ToningEffectStandard',
      'desc' => [
        'en' => 'Toning Effect Standard',
      ],
    ],
  ];

}
