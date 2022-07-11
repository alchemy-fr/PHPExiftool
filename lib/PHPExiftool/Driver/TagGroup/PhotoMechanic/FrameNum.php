<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoMechanic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameNum extends AbstractTagGroup
{

  protected string $id = 'PhotoMechanic:FrameNum';

  protected string $name = 'FrameNum';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Frame Num',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoMechanic::SoftEdit
       * line : 305052
       * type : int32s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PhotoMechanic::SoftEdit.PhotoMechanic:FrameNum',
      'desc' => [
        'en' => 'Frame Num',
      ],
    ],
  ];

}
