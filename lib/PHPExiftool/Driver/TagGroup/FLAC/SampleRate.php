<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SampleRate extends AbstractTagGroup
{

  protected string $id = 'FLAC:SampleRate';

  protected string $name = 'SampleRate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sample Rate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLAC::StreamInfo
       * line : 122292
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLAC::StreamInfo.FLAC:SampleRate',
      'desc' => [
        'en' => 'Sample Rate',
      ],
    ],
  ];

}
