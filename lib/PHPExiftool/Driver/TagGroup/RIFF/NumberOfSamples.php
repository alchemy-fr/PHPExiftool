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
class NumberOfSamples extends AbstractTagGroup
{

  protected string $id = 'RIFF:NumberOfSamples';

  protected string $name = 'NumberOfSamples';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Number Of Samples',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Main
       * line : 329006
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Main.RIFF:NumberOfSamples',
      'desc' => [
        'en' => 'Number Of Samples',
      ],
    ],
  ];

}
