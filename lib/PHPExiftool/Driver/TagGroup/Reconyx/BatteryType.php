<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BatteryType extends AbstractTagGroup
{

  protected string $id = 'Reconyx:BatteryType';

  protected string $name = 'BatteryType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Battery Type',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Type3
       * line : 331665
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Type3.Reconyx:BatteryType',
      'desc' => [
        'en' => 'Battery Type',
      ],
    ],
  ];

}
