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
class LinearizationTable extends AbstractTagGroup
{

  protected string $id = 'SubIFD:LinearizationTable';

  protected string $name = 'LinearizationTable';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Linearization Table',
    'fr' => 'Table de linéarisation',
  ];

  protected int $count = 0;

  protected int $flags = 18;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119284
       * type : int16u
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Exif::Main.SubIFD:LinearizationTable',
      'desc' => [
        'en' => 'Linearization Table',
        'fr' => 'Table de linéarisation',
      ],
    ],
  ];

}
