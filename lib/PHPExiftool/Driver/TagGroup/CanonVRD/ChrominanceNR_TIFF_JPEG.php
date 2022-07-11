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
class ChrominanceNR_TIFF_JPEG extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:ChrominanceNR_TIFF_JPEG';

  protected string $name = 'ChrominanceNR_TIFF_JPEG';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Chrominance NR TIFF JPEG',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83345
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:ChrominanceNR_TIFF_JPEG',
      'desc' => [
        'en' => 'Chrominance NR TIFF JPEG',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83377
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:ChrominanceNR_TIFF_JPEG',
      'desc' => [
        'en' => 'Chrominance NR TIFF JPEG',
      ],
    ],
  ];

}
