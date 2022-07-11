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
class FusionMode extends AbstractTagGroup
{

  protected string $id = 'QuickTime:FusionMode';

  protected string $name = 'FusionMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Fusion Mode',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Fusion360Fly
       * line : 313453
       * type : int8u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::Fusion360Fly.QuickTime:FusionMode',
      'desc' => [
        'en' => 'Fusion Mode',
      ],
    ],
  ];

}
