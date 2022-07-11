<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dwc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EventTime extends AbstractTagGroup
{

  protected string $id = 'XMP-dwc:EventTime';

  protected string $name = 'EventTime';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Event Time',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DarwinCore::Main
       * line : 106432
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'DarwinCore::Main.XMP-dwc:EventTime',
      'desc' => [
        'en' => 'Event Time',
      ],
    ],
  ];

}
