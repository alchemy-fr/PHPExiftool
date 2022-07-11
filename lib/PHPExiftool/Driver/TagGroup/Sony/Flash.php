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
class Flash extends AbstractTagGroup
{

  protected string $id = 'Sony:Flash';

  protected string $name = 'Flash';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Flash',
    'fr' => 'Flash',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::PMP
       * line : 361883
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::PMP.Sony:Flash',
      'desc' => [
        'en' => 'Flash',
        'fr' => 'Flash',
      ],
    ],
  ];

}
