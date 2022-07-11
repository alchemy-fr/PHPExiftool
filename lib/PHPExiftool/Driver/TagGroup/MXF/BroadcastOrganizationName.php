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
class BroadcastOrganizationName extends AbstractTagGroup
{

  protected string $id = 'MXF:BroadcastOrganizationName';

  protected string $name = 'BroadcastOrganizationName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Broadcast Organization Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167848
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:BroadcastOrganizationName',
      'desc' => [
        'en' => 'Broadcast Organization Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170343
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:BroadcastOrganizationName',
      'desc' => [
        'en' => 'Broadcast Organization Name',
      ],
    ],
  ];

}
