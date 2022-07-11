<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GEModel extends AbstractTagGroup
{

  protected string $id = 'GE:GEModel';

  protected string $name = 'GEModel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GE Model',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : GE::Main
       * line : 131563
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'GE::Main.GE:GEModel',
      'desc' => [
        'en' => 'GE Model',
      ],
    ],
  ];

}
