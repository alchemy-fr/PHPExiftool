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
class FullImageSize extends AbstractTagGroup
{

  protected string $id = 'Sony:FullImageSize';

  protected string $name = 'FullImageSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Full Image Size',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Main
       * line : 359019
       * type : int32u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:FullImageSize',
      'desc' => [
        'en' => 'Full Image Size',
      ],
    ],
  ];

}
