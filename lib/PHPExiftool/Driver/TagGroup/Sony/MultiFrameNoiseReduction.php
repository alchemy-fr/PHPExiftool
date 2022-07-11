<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MultiFrameNoiseReduction extends AbstractTagGroup
{

  protected string $id = 'Sony:MultiFrameNoiseReduction';

  protected string $name = 'MultiFrameNoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Multi Frame Noise Reduction',
    'fr' => 'Réduc. bruit multi-photos',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351354
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:MultiFrameNoiseReduction',
      'desc' => [
        'en' => 'Multi Frame Noise Reduction',
        'fr' => 'Réduc. bruit multi-photos',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::Main
       * line : 354518
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:MultiFrameNoiseReduction',
      'desc' => [
        'en' => 'Multi Frame Noise Reduction',
        'fr' => 'Réduc. bruit multi-photos',
      ],
    ],
    2 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 360975
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:MultiFrameNoiseReduction',
      'desc' => [
        'en' => 'Multi Frame Noise Reduction',
        'fr' => 'Réduc. bruit multi-photos',
      ],
    ],
  ];

}
