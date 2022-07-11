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
class HeaderSize extends AbstractTagGroup
{

  protected string $id = 'Real-RA5:HeaderSize';

  protected string $name = 'HeaderSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Header Size',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::AudioV5
       * line : 330348
       * type : int32u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::AudioV5.Real-RA5:HeaderSize',
      'desc' => [
        'en' => 'Header Size',
      ],
    ],
  ];

}
