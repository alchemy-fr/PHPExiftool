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
class NumberOfSamples64 extends AbstractTagGroup
{

  protected string $id = 'RIFF:NumberOfSamples64';

  protected string $name = 'NumberOfSamples64';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Number Of Samples 64',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::DS64
       * line : 328188
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::DS64.RIFF:NumberOfSamples64',
      'desc' => [
        'en' => 'Number Of Samples 64',
      ],
    ],
  ];

}
