<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_ics;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeStamp extends AbstractTagGroup
{

  protected string $id = 'XMP-ics:TimeStamp';

  protected string $name = 'TimeStamp';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Time Stamp',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::ics
       * line : 409241
       * type : date
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::ics.XMP-ics:TimeStamp',
      'desc' => [
        'en' => 'Time Stamp',
      ],
    ],
  ];

}
