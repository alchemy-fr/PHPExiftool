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
class HalftoneHints extends AbstractTagGroup
{

  protected string $id = 'IFD0:HalftoneHints';

  protected string $name = 'HalftoneHints';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Halftone Hints',
    'fr' => 'Indications sur les demi-teintes',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111868
       * type : int16u
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:HalftoneHints',
      'desc' => [
        'en' => 'Halftone Hints',
        'fr' => 'Indications sur les demi-teintes',
      ],
    ],
  ];

}
