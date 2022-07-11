<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SoftwareVersion extends AbstractTagGroup
{

  protected string $id = 'Minolta:SoftwareVersion';

  protected string $name = 'SoftwareVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Software Version',
  ];

  protected int $count = 16;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::MMA
       * line : 182892
       * type : string
       * writable : false
       * count : 16
       * flags : Permanent
       */
      'id' => 'Minolta::MMA.Minolta:SoftwareVersion',
      'desc' => [
        'en' => 'Software Version',
      ],
    ],
  ];

}
