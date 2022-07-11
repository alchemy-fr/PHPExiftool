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
class PrimaryChromaticities extends AbstractTagGroup
{

  protected string $id = 'IFD0:PrimaryChromaticities';

  protected string $name = 'PrimaryChromaticities';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Primary Chromaticities',
    'fr' => 'Chromaticité des couleurs primaires',
  ];

  protected int $count = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111835
       * type : rational64u
       * writable : true
       * count : 6
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:PrimaryChromaticities',
      'desc' => [
        'en' => 'Primary Chromaticities',
        'fr' => 'Chromaticité des couleurs primaires',
      ],
    ],
  ];

}
