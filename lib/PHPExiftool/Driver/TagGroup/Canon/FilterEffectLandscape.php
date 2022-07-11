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
class FilterEffectLandscape extends AbstractTagGroup
{

  protected string $id = 'Canon:FilterEffectLandscape';

  protected string $name = 'FilterEffectLandscape';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Filter Effect Landscape',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::PSInfo
       * line : 67260
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::PSInfo.Canon:FilterEffectLandscape',
      'desc' => [
        'en' => 'Filter Effect Landscape',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::PSInfo2
       * line : 68358
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Canon::PSInfo2.Canon:FilterEffectLandscape',
      'desc' => [
        'en' => 'Filter Effect Landscape',
      ],
    ],
  ];

}
