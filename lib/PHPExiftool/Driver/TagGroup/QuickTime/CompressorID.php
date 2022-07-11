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
class CompressorID extends AbstractTagGroup
{

  protected string $id = 'QuickTime:CompressorID';

  protected string $name = 'CompressorID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Compressor ID',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ImageDesc
       * line : 314213
       * type : string
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'QuickTime::ImageDesc.QuickTime:CompressorID',
      'desc' => [
        'en' => 'Compressor ID',
      ],
    ],
  ];

}
