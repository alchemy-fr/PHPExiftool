<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VP8Version extends AbstractTagGroup
{

  protected string $id = 'RIFF:VP8Version';

  protected string $name = 'VP8Version';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'VP8 Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::VP8
       * line : 329284
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::VP8.RIFF:VP8Version',
      'desc' => [
        'en' => 'VP8 Version',
      ],
    ],
  ];

}
