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
class ToningEffectAuto extends AbstractTagGroup
{

  protected string $id = 'Canon:ToningEffectAuto';

  protected string $name = 'ToningEffectAuto';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Toning Effect Auto',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 68745
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::PSInfo2.Canon:ToningEffectAuto',
      'desc' => [
        'en' => 'Toning Effect Auto',
      ],
    ],
  ];

}
