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
class MeteringMode extends AbstractTagGroup
{

  protected string $id = 'Nikon:MeteringMode';

  protected string $name = 'MeteringMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Metering Mode',
    'fr' => 'Mode de mesure',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVITags
       * line : 191756
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::AVITags.Nikon:MeteringMode',
      'desc' => [
        'en' => 'Metering Mode',
        'fr' => 'Mode de mesure',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCTG
       * line : 202848
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:MeteringMode',
      'desc' => [
        'en' => 'Metering Mode',
        'fr' => 'Mode de mesure',
      ],
    ],
  ];

}
