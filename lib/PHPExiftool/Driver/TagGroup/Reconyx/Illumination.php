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
class Illumination extends AbstractTagGroup
{

  protected string $id = 'Reconyx:Illumination';

  protected string $name = 'Illumination';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Illumination',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Reconyx::Type2
       * line : 331309
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Reconyx::Type2.Reconyx:Illumination',
      'desc' => [
        'en' => 'Illumination',
      ],
    ],
  ];

}
