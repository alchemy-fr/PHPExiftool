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
class LensType3 extends AbstractTagGroup
{

  protected string $id = 'Sony:LensType3';

  protected string $name = 'LensType3';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Type 3',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag940c
       * line : 390736
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag940c.Sony:LensType3',
      'desc' => [
        'en' => 'Lens Type 3',
      ],
    ],
  ];

}
