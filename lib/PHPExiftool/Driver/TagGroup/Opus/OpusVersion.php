<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Opus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OpusVersion extends AbstractTagGroup
{

  protected string $id = 'Opus:OpusVersion';

  protected string $name = 'OpusVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Opus Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Opus::Header
       * line : 264079
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Opus::Header.Opus:OpusVersion',
      'desc' => [
        'en' => 'Opus Version',
      ],
    ],
  ];

}
