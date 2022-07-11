<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IterationCount extends AbstractTagGroup
{

  protected string $id = 'MNG:IterationCount';

  protected string $name = 'IterationCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Iteration Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::Loop
       * line : 165357
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::Loop.MNG:IterationCount',
      'desc' => [
        'en' => 'Iteration Count',
      ],
    ],
  ];

}
