<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompressorName extends AbstractTagGroup
{

  protected string $id = 'AIFF:CompressorName';

  protected string $name = 'CompressorName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Compressor Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : AIFF::Common
       * line : 174
       * type : pstring
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'AIFF::Common.AIFF:CompressorName',
      'desc' => [
        'en' => 'Compressor Name',
      ],
    ],
  ];

}
