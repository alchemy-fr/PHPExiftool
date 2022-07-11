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
class CFARepeatPatternDim extends AbstractTagGroup
{

  protected string $id = 'SubIFD:CFARepeatPatternDim';

  protected string $name = 'CFARepeatPatternDim';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'CFA Repeat Pattern Dim',
    'fr' => 'Dimension du modèle de répétition CFA',
  ];

  protected int $count = 2;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113313
       * type : int16u
       * writable : true
       * count : 2
       * flags : Unsafe
       */
      'id' => 'Exif::Main.SubIFD:CFARepeatPatternDim',
      'desc' => [
        'en' => 'CFA Repeat Pattern Dim',
        'fr' => 'Dimension du modèle de répétition CFA',
      ],
    ],
  ];

}
