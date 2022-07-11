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
class FocusFrameSize extends AbstractTagGroup
{

  protected string $id = 'Sony:FocusFrameSize';

  protected string $name = 'FocusFrameSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Focus Frame Size',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Main
       * line : 356276
       * type : int16u
       * writable : false
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:FocusFrameSize',
      'desc' => [
        'en' => 'Focus Frame Size',
      ],
    ],
  ];

}
