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
class ConversionLens extends AbstractTagGroup
{

  protected string $id = 'Olympus:ConversionLens';

  protected string $name = 'ConversionLens';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Conversion Lens',
    'fr' => 'Complément Optique',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Equipment
       * line : 254903
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::Equipment.Olympus:ConversionLens',
      'desc' => [
        'en' => 'Conversion Lens',
        'fr' => 'Complément Optique',
      ],
    ],
  ];

}
