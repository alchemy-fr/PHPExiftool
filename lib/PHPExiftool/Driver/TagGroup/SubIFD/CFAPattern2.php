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
class CFAPattern2 extends AbstractTagGroup
{

  protected string $id = 'SubIFD:CFAPattern2';

  protected string $name = 'CFAPattern2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'CFA Pattern 2',
    'fr' => 'Modèle CFA 2',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113326
       * type : int8u
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.SubIFD:CFAPattern2',
      'desc' => [
        'en' => 'CFA Pattern 2',
        'fr' => 'Modèle CFA 2',
      ],
    ],
  ];

}
