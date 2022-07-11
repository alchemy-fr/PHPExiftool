<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Robots extends AbstractTagGroup
{

  protected string $id = 'HTML:Robots';

  protected string $name = 'Robots';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Robots',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::Main
       * line : 142827
       * type : ?
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'HTML::Main.HTML:Robots',
      'desc' => [
        'en' => 'Robots',
      ],
    ],
  ];

}
