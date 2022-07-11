<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SampleDegradationPriority extends AbstractTagGroup
{

  protected string $id = 'QuickTime:SampleDegradationPriority';

  protected string $name = 'SampleDegradationPriority';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sample Degradation Priority',
  ];

  protected int $count = 0;

  protected int $flags = 34;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::SampleTable
       * line : 324771
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Unknown
       */
      'id' => 'QuickTime::SampleTable.QuickTime:SampleDegradationPriority',
      'desc' => [
        'en' => 'Sample Degradation Priority',
      ],
    ],
  ];

}
