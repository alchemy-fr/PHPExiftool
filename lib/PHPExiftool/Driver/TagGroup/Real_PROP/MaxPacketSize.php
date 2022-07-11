<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_PROP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaxPacketSize extends AbstractTagGroup
{

  protected string $id = 'Real-PROP:MaxPacketSize';

  protected string $name = 'MaxPacketSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Max Packet Size',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::Properties
       * line : 330853
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::Properties.Real-PROP:MaxPacketSize',
      'desc' => [
        'en' => 'Max Packet Size',
      ],
    ],
  ];

}
