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
class RetouchNEFProcessing extends AbstractTagGroup
{

  protected string $id = 'Nikon:RetouchNEFProcessing';

  protected string $name = 'RetouchNEFProcessing';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch NEF Processing',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::RetouchInfo
       * line : 205545
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::RetouchInfo.Nikon:RetouchNEFProcessing',
      'desc' => [
        'en' => 'Retouch NEF Processing',
      ],
    ],
  ];

}
