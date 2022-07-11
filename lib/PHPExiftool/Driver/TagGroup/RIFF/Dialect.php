<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Dialect extends AbstractTagGroup
{

  protected string $id = 'RIFF:Dialect';

  protected string $name = 'Dialect';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Dialect',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::CSET
       * line : 328175
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::CSET.RIFF:Dialect',
      'desc' => [
        'en' => 'Dialect',
      ],
    ],
  ];

}
