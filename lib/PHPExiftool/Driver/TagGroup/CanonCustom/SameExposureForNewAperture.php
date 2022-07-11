<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SameExposureForNewAperture extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:SameExposureForNewAperture';

  protected string $name = 'SameExposureForNewAperture';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Same Exposure For New Aperture',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73042
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SameExposureForNewAperture',
      'desc' => [
        'en' => 'Same Exposure For New Aperture',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 73056
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:SameExposureForNewAperture',
      'desc' => [
        'en' => 'Same Exposure For New Aperture',
      ],
    ],
  ];

}
