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
class AFStatusTop_right extends AbstractTagGroup
{

  protected string $id = 'Minolta:AFStatusTop-right';

  protected string $name = 'AFStatusTop-right';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Status Top-right',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraInfoA100
       * line : 177072
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraInfoA100.Minolta:AFStatusTop-right',
      'desc' => [
        'en' => 'AF Status Top-right',
      ],
    ],
  ];

}
