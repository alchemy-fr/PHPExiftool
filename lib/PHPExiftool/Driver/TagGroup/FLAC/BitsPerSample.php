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
class BitsPerSample extends AbstractTagGroup
{

  protected string $id = 'FLAC:BitsPerSample';

  protected string $name = 'BitsPerSample';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Bits Per Sample',
    'fr' => 'Nombre de bits par échantillon',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLAC::StreamInfo
       * line : 122305
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLAC::StreamInfo.FLAC:BitsPerSample',
      'desc' => [
        'en' => 'Bits Per Sample',
        'fr' => 'Nombre de bits par échantillon',
      ],
    ],
  ];

}
