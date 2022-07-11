<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Type extends AbstractTagGroup
{

  protected string $id = 'Flash:Type';

  protected string $name = 'Type';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Flash::CuePoint
       * line : 124225
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Flash::CuePoint.Flash:Type',
      'desc' => [
        'en' => 'Type',
      ],
    ],
  ];

}
