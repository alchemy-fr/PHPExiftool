<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nintendo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Parallax extends AbstractTagGroup
{

  protected string $id = 'Nintendo:Parallax';

  protected string $name = 'Parallax';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Parallax',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nintendo::CameraInfo
       * line : 249343
       * type : float
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nintendo::CameraInfo.Nintendo:Parallax',
      'desc' => [
        'en' => 'Parallax',
      ],
    ],
  ];

}
