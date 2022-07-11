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
class Gain extends AbstractTagGroup
{

  protected string $id = 'RIFF:Gain';

  protected string $name = 'Gain';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gain',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Instrument
       * line : 328953
       * type : int8s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Instrument.RIFF:Gain',
      'desc' => [
        'en' => 'Gain',
      ],
    ],
  ];

}
