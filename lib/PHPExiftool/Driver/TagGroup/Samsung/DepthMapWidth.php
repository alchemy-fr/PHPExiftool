<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DepthMapWidth extends AbstractTagGroup
{

  protected string $id = 'Samsung:DepthMapWidth';

  protected string $name = 'DepthMapWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Depth Map Width',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::DualShotExtra
       * line : 334209
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Samsung::DualShotExtra.Samsung:DepthMapWidth',
      'desc' => [
        'en' => 'Depth Map Width',
      ],
    ],
  ];

}
