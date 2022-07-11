<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChromaBlurRadius extends AbstractTagGroup
{

  protected string $id = 'SubIFD:ChromaBlurRadius';

  protected string $name = 'ChromaBlurRadius';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Chroma Blur Radius',
    'fr' => 'Rayon de flou de chromatisme',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119537
       * type : rational64u
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.SubIFD:ChromaBlurRadius',
      'desc' => [
        'en' => 'Chroma Blur Radius',
        'fr' => 'Rayon de flou de chromatisme',
      ],
    ],
  ];

}
