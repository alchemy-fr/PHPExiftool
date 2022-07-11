<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SequenceShotInterval extends AbstractTagGroup
{

  protected string $id = 'Sanyo:SequenceShotInterval';

  protected string $name = 'SequenceShotInterval';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sequence Shot Interval',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sanyo::Main
       * line : 337150
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sanyo::Main.Sanyo:SequenceShotInterval',
      'desc' => [
        'en' => 'Sequence Shot Interval',
      ],
    ],
  ];

}
