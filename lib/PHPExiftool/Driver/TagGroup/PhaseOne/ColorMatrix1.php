<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMatrix1 extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:ColorMatrix1';

  protected string $name = 'ColorMatrix1';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Matrix 1',
    'fr' => 'Matrice de couleur 1',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::Main
       * line : 303556
       * type : float
       * writable : true
       * count : 9
       * flags : Permanent
       */
      'id' => 'PhaseOne::Main.PhaseOne:ColorMatrix1',
      'desc' => [
        'en' => 'Color Matrix 1',
        'fr' => 'Matrice de couleur 1',
      ],
    ],
  ];

}
