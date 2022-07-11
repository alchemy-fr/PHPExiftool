<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensType extends AbstractTagGroup
{

  protected string $id = 'Minolta:LensType';

  protected string $name = 'LensType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Type',
    'fr' => 'Sorte d\'objectif',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::Main
       * line : 184212
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 186047
       * type : int16uRev
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
  ];

}
