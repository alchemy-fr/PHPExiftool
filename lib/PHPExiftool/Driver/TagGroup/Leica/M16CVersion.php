<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class M16CVersion extends AbstractTagGroup
{

  protected string $id = 'Leica:M16CVersion';

  protected string $name = 'M16CVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'M16C Version',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica2
       * line : 275096
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica2.Leica:M16CVersion',
      'desc' => [
        'en' => 'M16C Version',
      ],
    ],
  ];

}
