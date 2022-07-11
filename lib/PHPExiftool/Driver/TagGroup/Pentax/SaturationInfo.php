<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SaturationInfo extends AbstractTagGroup
{

  protected string $id = 'Pentax:SaturationInfo';

  protected string $name = 'SaturationInfo';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Saturation Info',
  ];

  protected int $count = 0;

  protected int $flags = 38;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 301150
       * type : ?
       * writable : true
       * count : 
       * flags : Binary,Permanent,Unknown
       */
      'id' => 'Pentax::Main.Pentax:SaturationInfo',
      'desc' => [
        'en' => 'Saturation Info',
      ],
    ],
  ];

}
