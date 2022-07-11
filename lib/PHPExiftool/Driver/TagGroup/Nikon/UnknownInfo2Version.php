<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UnknownInfo2Version extends AbstractTagGroup
{

  protected string $id = 'Nikon:UnknownInfo2Version';

  protected string $name = 'UnknownInfo2Version';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unknown Info 2 Version',
  ];

  protected int $count = 4;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::UnknownInfo2
       * line : 209899
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::UnknownInfo2.Nikon:UnknownInfo2Version',
      'desc' => [
        'en' => 'Unknown Info 2 Version',
      ],
    ],
  ];

}
