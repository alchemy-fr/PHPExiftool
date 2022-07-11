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
class ExtraInfoVersion extends AbstractTagGroup
{

  protected string $id = 'Sony:ExtraInfoVersion';

  protected string $name = 'ExtraInfoVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Extra Info Version',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::ExtraInfo
       * line : 352510
       * type : int8u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::ExtraInfo.Sony:ExtraInfoVersion',
      'desc' => [
        'en' => 'Extra Info Version',
      ],
    ],
  ];

}
