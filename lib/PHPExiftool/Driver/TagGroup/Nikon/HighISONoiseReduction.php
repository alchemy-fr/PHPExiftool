<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HighISONoiseReduction extends AbstractTagGroup
{

  protected string $id = 'Nikon:HighISONoiseReduction';

  protected string $name = 'HighISONoiseReduction';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'High ISO Noise Reduction',
    'fr' => 'Réduction du bruit en haute sensibilité ISO',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199806
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203852
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:HighISONoiseReduction',
      'desc' => [
        'en' => 'High ISO Noise Reduction',
        'fr' => 'Réduction du bruit en haute sensibilité ISO',
      ],
    ],
  ];

}
