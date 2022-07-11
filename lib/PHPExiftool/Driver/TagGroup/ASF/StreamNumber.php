<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StreamNumber extends AbstractTagGroup
{

  protected string $id = 'ASF:StreamNumber';

  protected string $name = 'StreamNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Stream Number',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::StreamProperties
       * line : 2092
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::StreamProperties.ASF:StreamNumber',
      'desc' => [
        'en' => 'Stream Number',
      ],
    ],
  ];

}
