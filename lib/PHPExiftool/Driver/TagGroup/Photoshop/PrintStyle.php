<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrintStyle extends AbstractTagGroup
{

  protected string $id = 'Photoshop:PrintStyle';

  protected string $name = 'PrintStyle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Print Style',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 306006
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Photoshop::Main.Photoshop:PrintStyle',
      'desc' => [
        'en' => 'Print Style',
      ],
    ],
    1 => [
      /**
       * table_name : Photoshop::PrintScaleInfo
       * line : 306067
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::PrintScaleInfo.Photoshop:PrintStyle',
      'desc' => [
        'en' => 'Print Style',
      ],
    ],
  ];

}
