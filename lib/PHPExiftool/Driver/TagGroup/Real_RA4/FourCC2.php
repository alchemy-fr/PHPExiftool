<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FourCC2 extends AbstractTagGroup
{

  protected string $id = 'Real-RA4:FourCC2';

  protected string $name = 'FourCC2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Four CC2',
  ];

  protected int $count = 4;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::AudioV4
       * line : 330209
       * type : undef
       * writable : false
       * count : 4
       * flags : Unknown
       */
      'id' => 'Real::AudioV4.Real-RA4:FourCC2',
      'desc' => [
        'en' => 'Four CC2',
      ],
    ],
  ];

}
