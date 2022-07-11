<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlackLevel extends AbstractTagGroup
{

  protected string $id = 'FujiIFD:BlackLevel';

  protected string $name = 'BlackLevel';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Black Level',
    'fr' => 'Niveau noir',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::IFD
       * line : 129050
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FujiFilm::IFD.FujiIFD:BlackLevel',
      'desc' => [
        'en' => 'Black Level',
        'fr' => 'Niveau noir',
      ],
    ],
  ];

}
