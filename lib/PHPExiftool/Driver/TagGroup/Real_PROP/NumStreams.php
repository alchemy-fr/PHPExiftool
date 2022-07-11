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
class NumStreams extends AbstractTagGroup
{

  protected string $id = 'Real-PROP:NumStreams';

  protected string $name = 'NumStreams';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Num Streams',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::Properties
       * line : 330885
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::Properties.Real-PROP:NumStreams',
      'desc' => [
        'en' => 'Num Streams',
      ],
    ],
  ];

}
