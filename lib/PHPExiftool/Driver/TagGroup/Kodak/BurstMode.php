<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BurstMode extends AbstractTagGroup
{

  protected string $id = 'Kodak:BurstMode';

  protected string $name = 'BurstMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Burst Mode',
    'fr' => 'Mode Rafale',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 158064
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Main.Kodak:BurstMode',
      'desc' => [
        'en' => 'Burst Mode',
        'fr' => 'Mode Rafale',
      ],
    ],
  ];

}
