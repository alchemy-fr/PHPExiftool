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
class CFAPattern extends AbstractTagGroup
{

  protected string $id = 'IFD0:CFAPattern';

  protected string $name = 'CFAPattern';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'CFA Pattern',
    'fr' => 'Matrice de filtrage couleur',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::Main
       * line : 280624
       * type : int16u
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'PanasonicRaw::Main.IFD0:CFAPattern',
      'desc' => [
        'en' => 'CFA Pattern',
        'fr' => 'Matrice de filtrage couleur',
      ],
    ],
  ];

}
