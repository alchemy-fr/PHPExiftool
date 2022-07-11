<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiFilm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlickerReduction extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:FlickerReduction';

  protected string $name = 'FlickerReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flicker Reduction',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::Main
       * line : 131212
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::Main.FujiFilm:FlickerReduction',
      'desc' => [
        'en' => 'Flicker Reduction',
      ],
    ],
  ];

}
