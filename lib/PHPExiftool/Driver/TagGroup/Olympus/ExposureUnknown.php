<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureUnknown extends AbstractTagGroup
{

  protected string $id = 'Olympus:ExposureUnknown';

  protected string $name = 'ExposureUnknown';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Exposure Unknown',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::MOV1
       * line : 256873
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Olympus::MOV1.Olympus:ExposureUnknown',
      'desc' => [
        'en' => 'Exposure Unknown',
      ],
    ],
  ];

}
