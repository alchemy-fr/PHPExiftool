<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LuminanceNoiseReductionContrast extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:LuminanceNoiseReductionContrast';

  protected string $name = 'LuminanceNoiseReductionContrast';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Luminance Noise Reduction Contrast',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 403293
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::crs.XMP-crs:LuminanceNoiseReductionContrast',
      'desc' => [
        'en' => 'Luminance Noise Reduction Contrast',
      ],
    ],
  ];

}
