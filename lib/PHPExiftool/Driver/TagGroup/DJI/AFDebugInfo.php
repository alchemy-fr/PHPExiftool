<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFDebugInfo extends AbstractTagGroup
{

  protected string $id = 'DJI:AFDebugInfo';

  protected string $name = 'AFDebugInfo';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AF Debug Info',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : DJI::Info
       * line : 104807
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'DJI::Info.DJI:AFDebugInfo',
      'desc' => [
        'en' => 'AF Debug Info',
      ],
    ],
  ];

}
