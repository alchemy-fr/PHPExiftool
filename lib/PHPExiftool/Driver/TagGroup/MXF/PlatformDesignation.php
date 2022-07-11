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
class PlatformDesignation extends AbstractTagGroup
{

  protected string $id = 'MXF:PlatformDesignation';

  protected string $name = 'PlatformDesignation';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Platform Designation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170110
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PlatformDesignation',
      'desc' => [
        'en' => 'Platform Designation',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172329
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PlatformDesignation',
      'desc' => [
        'en' => 'Platform Designation',
      ],
    ],
  ];

}
