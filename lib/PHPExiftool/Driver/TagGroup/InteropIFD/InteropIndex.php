<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\InteropIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InteropIndex extends AbstractTagGroup
{

  protected string $id = 'InteropIFD:InteropIndex';

  protected string $name = 'InteropIndex';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Interoperability Index',
    'fr' => 'Identification d\'interopérabilité',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 110053
       * type : string
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.InteropIFD:InteropIndex',
      'desc' => [
        'en' => 'Interoperability Index',
        'fr' => 'Identification d\'interopérabilité',
      ],
    ],
  ];

}
