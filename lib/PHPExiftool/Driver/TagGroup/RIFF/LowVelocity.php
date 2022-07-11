<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LowVelocity extends AbstractTagGroup
{

  protected string $id = 'RIFF:LowVelocity';

  protected string $name = 'LowVelocity';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Low Velocity',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Instrument
       * line : 328962
       * type : int8s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Instrument.RIFF:LowVelocity',
      'desc' => [
        'en' => 'Low Velocity',
      ],
    ],
  ];

}
