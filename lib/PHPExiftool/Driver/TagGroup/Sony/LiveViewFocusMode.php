<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LiveViewFocusMode extends AbstractTagGroup
{

  protected string $id = 'Sony:LiveViewFocusMode';

  protected string $name = 'LiveViewFocusMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Live View Focus Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351554
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:LiveViewFocusMode',
      'desc' => [
        'en' => 'Live View Focus Mode',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraSettings3
       * line : 351733
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraSettings3.Sony:LiveViewFocusMode',
      'desc' => [
        'en' => 'Live View Focus Mode',
      ],
    ],
  ];

}
