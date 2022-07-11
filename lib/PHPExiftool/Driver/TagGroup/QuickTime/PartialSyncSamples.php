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
class PartialSyncSamples extends AbstractTagGroup
{

  protected string $id = 'QuickTime:PartialSyncSamples';

  protected string $name = 'PartialSyncSamples';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Partial Sync Samples',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::SampleTable
       * line : 324774
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::SampleTable.QuickTime:PartialSyncSamples',
      'desc' => [
        'en' => 'Partial Sync Samples',
      ],
    ],
  ];

}
