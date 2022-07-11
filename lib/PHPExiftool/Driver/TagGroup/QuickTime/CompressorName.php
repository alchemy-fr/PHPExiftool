<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompressorName extends AbstractTagGroup
{

  protected string $id = 'QuickTime:CompressorName';

  protected string $name = 'CompressorName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Compressor Name',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ImageDesc
       * line : 314316
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'QuickTime::ImageDesc.QuickTime:CompressorName',
      'desc' => [
        'en' => 'Compressor Name',
      ],
    ],
  ];

}
