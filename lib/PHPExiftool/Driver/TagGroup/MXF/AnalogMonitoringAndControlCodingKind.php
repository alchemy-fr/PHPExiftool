<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AnalogMonitoringAndControlCodingKind extends AbstractTagGroup
{

  protected string $id = 'MXF:AnalogMonitoringAndControlCodingKind';

  protected string $name = 'AnalogMonitoringAndControlCodingKind';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Analog Monitoring And Control Coding Kind',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168397
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AnalogMonitoringAndControlCodingKind',
      'desc' => [
        'en' => 'Analog Monitoring And Control Coding Kind',
      ],
    ],
  ];

}
