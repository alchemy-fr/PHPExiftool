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
class NumAFPoints extends AbstractTagGroup
{

  protected string $id = 'Canon:NumAFPoints';

  protected string $name = 'NumAFPoints';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Num AF Points',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFInfo
       * line : 4028
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::AFInfo.Canon:NumAFPoints',
      'desc' => [
        'en' => 'Num AF Points',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::AFInfo2
       * line : 4190
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::AFInfo2.Canon:NumAFPoints',
      'desc' => [
        'en' => 'Num AF Points',
      ],
    ],
  ];

}
