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
class SonyDateTime2 extends AbstractTagGroup
{

  protected string $id = 'Sony:SonyDateTime2';

  protected string $name = 'SonyDateTime2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sony Date Time 2',
  ];

  protected int $count = 6;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag9050a
       * line : 379554
       * type : undef
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'Sony::Tag9050a.Sony:SonyDateTime2',
      'desc' => [
        'en' => 'Sony Date Time 2',
      ],
    ],
  ];

}
