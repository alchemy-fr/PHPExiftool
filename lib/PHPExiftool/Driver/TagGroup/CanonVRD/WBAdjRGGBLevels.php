<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WBAdjRGGBLevels extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:WBAdjRGGBLevels';

  protected string $name = 'WBAdjRGGBLevels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB Adj RGGB Levels',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80396
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:WBAdjRGGBLevels',
      'desc' => [
        'en' => 'WB Adj RGGB Levels',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82181
       * type : int16u
       * writable : true
       * count : 4
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:WBAdjRGGBLevels',
      'desc' => [
        'en' => 'WB Adj RGGB Levels',
      ],
    ],
  ];

}
