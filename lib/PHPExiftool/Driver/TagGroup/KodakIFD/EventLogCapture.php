<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EventLogCapture extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:EventLogCapture';

  protected string $name = 'EventLogCapture';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Event Log Capture',
  ];

  protected int $count = 0;

  protected int $flags = 38;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155197
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Permanent,Unknown
       */
      'id' => 'Kodak::IFD.KodakIFD:EventLogCapture',
      'desc' => [
        'en' => 'Event Log Capture',
      ],
    ],
  ];

}
