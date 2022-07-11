<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VibrationReduction extends AbstractTagGroup
{

  protected string $id = 'Sony:VibrationReduction';

  protected string $name = 'VibrationReduction';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Vibration Reduction',
    'fr' => 'Reduction des vibrations',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::PIC
       * line : 361594
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::PIC.Sony:VibrationReduction',
      'desc' => [
        'en' => 'Vibration Reduction',
        'fr' => 'Reduction des vibrations',
      ],
    ],
  ];

}
