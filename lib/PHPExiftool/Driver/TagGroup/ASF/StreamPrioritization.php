<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StreamPrioritization extends AbstractTagGroup
{

  protected string $id = 'ASF:StreamPrioritization';

  protected string $name = 'StreamPrioritization';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Stream Prioritization',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::HeaderExtension
       * line : 1858
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::HeaderExtension.ASF:StreamPrioritization',
      'desc' => [
        'en' => 'Stream Prioritization',
      ],
    ],
  ];

}
