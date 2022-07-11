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
class DigitalZoomRatio extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:DigitalZoomRatio';

  protected string $name = 'DigitalZoomRatio';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Digital Zoom Ratio',
    'fr' => 'Rapport de zoom numérique',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 405758
       * type : rational
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:DigitalZoomRatio',
      'desc' => [
        'en' => 'Digital Zoom Ratio',
        'fr' => 'Rapport de zoom numérique',
      ],
    ],
  ];

}
