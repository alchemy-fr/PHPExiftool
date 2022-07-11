<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsInFocus extends AbstractTagGroup
{

  protected string $id = 'Nikon:AFPointsInFocus';

  protected string $name = 'AFPointsInFocus';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Points In Focus',
    'fr' => 'Points AF nets',
  ];

  protected int $count = 20;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AFInfo
       * line : 188354
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo.Nikon:AFPointsInFocus',
      'desc' => [
        'en' => 'AF Points In Focus',
        'fr' => 'Points AF nets',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::AFInfo2
       * line : 190366
       * type : undef
       * writable : true
       * count : 20
       * flags : Permanent
       */
      'id' => 'Nikon::AFInfo2.Nikon:AFPointsInFocus',
      'desc' => [
        'en' => 'AF Points In Focus',
        'fr' => 'Points AF nets',
      ],
    ],
  ];

}
