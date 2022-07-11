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
class MeasuredLV extends AbstractTagGroup
{

  protected string $id = 'Minolta:MeasuredLV';

  protected string $name = 'MeasuredLV';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Measured LV',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 185982
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:MeasuredLV',
      'desc' => [
        'en' => 'Measured LV',
      ],
    ],
  ];

}
