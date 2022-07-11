<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_tiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class YCbCrSubSampling extends AbstractTagGroup
{

  protected string $id = 'XMP-tiff:YCbCrSubSampling';

  protected string $name = 'YCbCrSubSampling';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Y Cb Cr Sub Sampling',
    'fr' => 'Rapport de sous-échantillonnage Y à C',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::tiff
       * line : 412826
       * type : integer
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::tiff.XMP-tiff:YCbCrSubSampling',
      'desc' => [
        'en' => 'Y Cb Cr Sub Sampling',
        'fr' => 'Rapport de sous-échantillonnage Y à C',
      ],
    ],
  ];

}
