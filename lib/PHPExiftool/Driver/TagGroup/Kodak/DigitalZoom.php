<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalZoom extends AbstractTagGroup
{

  protected string $id = 'Kodak:DigitalZoom';

  protected string $name = 'DigitalZoom';

  protected ?string $phpType = 'int';

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
       * table_name : Kodak::Main
       * line : 158652
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Main.Kodak:DigitalZoom',
      'desc' => [
        'en' => 'Digital Zoom',
        'fr' => 'Zoom numérique',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::Type5
       * line : 160614
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Type5.Kodak:DigitalZoom',
      'desc' => [
        'en' => 'Digital Zoom',
        'fr' => 'Zoom numérique',
      ],
    ],
    2 => [
      /**
       * table_name : Kodak::Type6
       * line : 160801
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Type6.Kodak:DigitalZoom',
      'desc' => [
        'en' => 'Digital Zoom',
        'fr' => 'Zoom numérique',
      ],
    ],
  ];

}
