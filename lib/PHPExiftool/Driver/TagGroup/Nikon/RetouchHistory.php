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
class RetouchHistory extends AbstractTagGroup
{

  protected string $id = 'Nikon:RetouchHistory';

  protected string $name = 'RetouchHistory';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch History',
    'fr' => 'Historique retouche',
  ];

  protected int $count = 10;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197908
       * type : int16u
       * writable : true
       * count : 10
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:RetouchHistory',
      'desc' => [
        'en' => 'Retouch History',
        'fr' => 'Historique retouche',
      ],
    ],
  ];

}
