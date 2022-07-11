<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TransparencyIndicator extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:TransparencyIndicator';

  protected string $name = 'TransparencyIndicator';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Transparency Indicator',
    'fr' => 'Indicateur de transparence',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113715
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:TransparencyIndicator',
      'desc' => [
        'en' => 'Transparency Indicator',
        'fr' => 'Indicateur de transparence',
      ],
    ],
  ];

}
