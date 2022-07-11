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
class AFPointsInFocus extends AbstractTagGroup
{

  protected string $id = 'Canon:AFPointsInFocus';

  protected string $name = 'AFPointsInFocus';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Points In Focus',
    'fr' => 'Points AF nets',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFInfo
       * line : 4087
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::AFInfo.Canon:AFPointsInFocus',
      'desc' => [
        'en' => 'AF Points In Focus',
        'fr' => 'Points AF nets',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::AFInfo2
       * line : 4247
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::AFInfo2.Canon:AFPointsInFocus',
      'desc' => [
        'en' => 'AF Points In Focus',
        'fr' => 'Points AF nets',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::ShotInfo
       * line : 70557
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::ShotInfo.Canon:AFPointsInFocus',
      'desc' => [
        'en' => 'AF Points In Focus',
        'fr' => 'Points AF nets',
      ],
    ],
  ];

}
