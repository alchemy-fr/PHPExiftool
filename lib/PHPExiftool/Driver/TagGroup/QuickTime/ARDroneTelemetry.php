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
class ARDroneTelemetry extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ARDroneTelemetry';

  protected string $name = 'ARDroneTelemetry';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AR Drone Telemetry',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Main
       * line : 324147
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Main.QuickTime:ARDroneTelemetry',
      'desc' => [
        'en' => 'AR Drone Telemetry',
      ],
    ],
  ];

}
