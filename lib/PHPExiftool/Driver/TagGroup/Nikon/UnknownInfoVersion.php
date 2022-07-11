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
class UnknownInfoVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:UnknownInfoVersion';

  protected string $name = 'UnknownInfoVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unknown Info Version',
  ];

  protected int $count = 4;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::UnknownInfo
       * line : 209891
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent,Unknown
       */
      'id' => 'Nikon::UnknownInfo.Nikon:UnknownInfoVersion',
      'desc' => [
        'en' => 'Unknown Info Version',
      ],
    ],
  ];

}
