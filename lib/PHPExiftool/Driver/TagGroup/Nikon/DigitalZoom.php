<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalZoom extends AbstractTagGroup
{

  protected string $id = 'Nikon:DigitalZoom';

  protected string $name = 'DigitalZoom';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Digital Zoom',
    'fr' => 'Zoom numérique',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 192110
       * type : rational64u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AVITags.Nikon:DigitalZoom',
      'desc' => [
        'en' => 'Digital Zoom',
        'fr' => 'Zoom numérique',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::Main
       * line : 197581
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:DigitalZoom',
      'desc' => [
        'en' => 'Digital Zoom',
        'fr' => 'Zoom numérique',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::Type2
       * line : 209862
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Type2.Nikon:DigitalZoom',
      'desc' => [
        'en' => 'Digital Zoom',
        'fr' => 'Zoom numérique',
      ],
    ],
  ];

}
