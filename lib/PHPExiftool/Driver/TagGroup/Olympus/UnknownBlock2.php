<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UnknownBlock2 extends AbstractTagGroup
{

  protected string $id = 'Olympus:UnknownBlock2';

  protected string $name = 'UnknownBlock2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unknown Block 2',
  ];

  protected int $count = 0;

  protected int $flags = 38;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::ImageProcessing
       * line : 255719
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Permanent,Unknown
       */
      'id' => 'Olympus::ImageProcessing.Olympus:UnknownBlock2',
      'desc' => [
        'en' => 'Unknown Block 2',
      ],
    ],
  ];

}
