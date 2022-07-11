<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SpeedZ extends AbstractTagGroup
{

  protected string $id = 'DJI:SpeedZ';

  protected string $name = 'SpeedZ';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Speed Z',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : DJI::Main
       * line : 104856
       * type : float
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'DJI::Main.DJI:SpeedZ',
      'desc' => [
        'en' => 'Speed Z',
      ],
    ],
  ];

}
