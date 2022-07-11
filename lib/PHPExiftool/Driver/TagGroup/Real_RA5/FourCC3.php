<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA5;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FourCC3 extends AbstractTagGroup
{

  protected string $id = 'Real-RA5:FourCC3';

  protected string $name = 'FourCC3';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Four CC3',
  ];

  protected int $count = 4;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::AudioV5
       * line : 330446
       * type : undef
       * writable : false
       * count : 4
       * flags : Unknown
       */
      'id' => 'Real::AudioV5.Real-RA5:FourCC3',
      'desc' => [
        'en' => 'Four CC3',
      ],
    ],
  ];

}
