<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFMicroAdjValue extends AbstractTagGroup
{

  protected string $id = 'Canon:AFMicroAdjValue';

  protected string $name = 'AFMicroAdjValue';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Micro Adj Value',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFMicroAdj
       * line : 4300
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::AFMicroAdj.Canon:AFMicroAdjValue',
      'desc' => [
        'en' => 'AF Micro Adj Value',
      ],
    ],
  ];

}
