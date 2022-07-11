<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SpectralSensitivity extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:SpectralSensitivity';

  protected string $name = 'SpectralSensitivity';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Spectral Sensitivity',
    'fr' => 'Sensibilité spectrale',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 408559
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:SpectralSensitivity',
      'desc' => [
        'en' => 'Spectral Sensitivity',
        'fr' => 'Sensibilité spectrale',
      ],
    ],
  ];

}
