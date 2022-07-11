<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class YCbCrSubSampling extends AbstractTagGroup
{

  protected string $id = 'IFD0:YCbCrSubSampling';

  protected string $name = 'YCbCrSubSampling';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Y Cb Cr Sub Sampling',
    'fr' => 'Rapport de sous-échantillonnage Y à C',
  ];

  protected int $count = 2;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 112851
       * type : int16u
       * writable : true
       * count : 2
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:YCbCrSubSampling',
      'desc' => [
        'en' => 'Y Cb Cr Sub Sampling',
        'fr' => 'Rapport de sous-échantillonnage Y à C',
      ],
    ],
  ];

}
