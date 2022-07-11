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
class HighNote extends AbstractTagGroup
{

  protected string $id = 'RIFF:HighNote';

  protected string $name = 'HighNote';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'High Note',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Instrument
       * line : 328959
       * type : int8s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Instrument.RIFF:HighNote',
      'desc' => [
        'en' => 'High Note',
      ],
    ],
  ];

}
