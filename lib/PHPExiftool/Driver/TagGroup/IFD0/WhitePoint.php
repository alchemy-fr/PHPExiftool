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
class WhitePoint extends AbstractTagGroup
{

  protected string $id = 'IFD0:WhitePoint';

  protected string $name = 'WhitePoint';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'White Point',
    'fr' => 'Chromaticité du point blanc',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111817
       * type : rational64u
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:WhitePoint',
      'desc' => [
        'en' => 'White Point',
        'fr' => 'Chromaticité du point blanc',
      ],
    ],
  ];

}
