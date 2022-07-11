<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Theora;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TheoraVersion extends AbstractTagGroup
{

  protected string $id = 'Theora:TheoraVersion';

  protected string $name = 'TheoraVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Theora Version',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : Theora::Identification
       * line : 395136
       * type : int8u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'Theora::Identification.Theora:TheoraVersion',
      'desc' => [
        'en' => 'Theora Version',
      ],
    ],
  ];

}
