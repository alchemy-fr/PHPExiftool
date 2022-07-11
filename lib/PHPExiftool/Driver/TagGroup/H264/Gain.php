<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Gain extends AbstractTagGroup
{

  protected string $id = 'H264:Gain';

  protected string $name = 'Gain';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gain',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : H264::Camera1
       * line : 140469
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::Camera1.H264:Gain',
      'desc' => [
        'en' => 'Gain',
      ],
    ],
  ];

}
