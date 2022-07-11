<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Micro2Version extends AbstractTagGroup
{

  protected string $id = 'Reconyx:Micro2Version';

  protected string $name = 'Micro2Version';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Micro 2 Version',
  ];

  protected int $count = 7;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Type2
       * line : 331178
       * type : undef
       * writable : true
       * count : 7
       * flags : Permanent
       */
      'id' => 'Reconyx::Type2.Reconyx:Micro2Version',
      'desc' => [
        'en' => 'Micro 2 Version',
      ],
    ],
  ];

}
