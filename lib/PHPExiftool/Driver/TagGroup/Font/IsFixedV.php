<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IsFixedV extends AbstractTagGroup
{

  protected string $id = 'Font:IsFixedV';

  protected string $name = 'IsFixedV';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Is Fixed V',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::AFM
       * line : 128123
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::AFM.Font:IsFixedV',
      'desc' => [
        'en' => 'Is Fixed V',
      ],
    ],
  ];

}
