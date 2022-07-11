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
class InteropVersion extends AbstractTagGroup
{

  protected string $id = 'InteropIFD:InteropVersion';

  protected string $name = 'InteropVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Interoperability Version',
    'fr' => 'Version d\'interopérabilité',
  ];

  protected int $count = 0;

  protected int $flags = 144;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 110113
       * type : undef
       * writable : true
       * count : 
       * flags : Mandatory,Unsafe
       */
      'id' => 'Exif::Main.InteropIFD:InteropVersion',
      'desc' => [
        'en' => 'Interoperability Version',
        'fr' => 'Version d\'interopérabilité',
      ],
    ],
  ];

}
