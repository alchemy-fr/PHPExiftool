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
class GimbalPitch extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GimbalPitch';

  protected string $name = 'GimbalPitch';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gimbal Pitch',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::tx3g
       * line : 327120
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::tx3g.QuickTime:GimbalPitch',
      'desc' => [
        'en' => 'Gimbal Pitch',
      ],
    ],
  ];

}
