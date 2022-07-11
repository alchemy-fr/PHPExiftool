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
class DefaultScale extends AbstractTagGroup
{

  protected string $id = 'SubIFD:DefaultScale';

  protected string $name = 'DefaultScale';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Default Scale',
    'fr' => 'Echelle par défaut',
  ];

  protected int $count = 2;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119344
       * type : rational64u
       * writable : true
       * count : 2
       * flags : Unsafe
       */
      'id' => 'Exif::Main.SubIFD:DefaultScale',
      'desc' => [
        'en' => 'Default Scale',
        'fr' => 'Echelle par défaut',
      ],
    ],
  ];

}
