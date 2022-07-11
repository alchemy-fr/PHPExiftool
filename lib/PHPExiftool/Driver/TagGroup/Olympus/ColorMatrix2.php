<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMatrix2 extends AbstractTagGroup
{

  protected string $id = 'Olympus:ColorMatrix2';

  protected string $name = 'ColorMatrix2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Matrix 2',
    'fr' => 'Matrice de couleur 2',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawInfo
       * line : 261258
       * type : int16u
       * writable : true
       * count : 9
       * flags : Permanent
       */
      'id' => 'Olympus::RawInfo.Olympus:ColorMatrix2',
      'desc' => [
        'en' => 'Color Matrix 2',
        'fr' => 'Matrice de couleur 2',
      ],
    ],
  ];

}
