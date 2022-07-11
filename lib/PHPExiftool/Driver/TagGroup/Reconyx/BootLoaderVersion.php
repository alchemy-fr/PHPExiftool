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
class BootLoaderVersion extends AbstractTagGroup
{

  protected string $id = 'Reconyx:BootLoaderVersion';

  protected string $name = 'BootLoaderVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Boot Loader Version',
  ];

  protected int $count = 7;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Type2
       * line : 331174
       * type : undef
       * writable : true
       * count : 7
       * flags : Permanent
       */
      'id' => 'Reconyx::Type2.Reconyx:BootLoaderVersion',
      'desc' => [
        'en' => 'Boot Loader Version',
      ],
    ],
  ];

}
