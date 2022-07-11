<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameBaseView extends AbstractTagGroup
{

  protected string $id = 'Parrot:FrameBaseView';

  protected string $name = 'FrameBaseView';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Frame Base View',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::V3
       * line : 282863
       * type : int16s
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'Parrot::V3.Parrot:FrameBaseView',
      'desc' => [
        'en' => 'Frame Base View',
      ],
    ],
  ];

}
