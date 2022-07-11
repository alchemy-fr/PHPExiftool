<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DeviantWhiteDaylight extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:DeviantWhiteDaylight';

  protected string $name = 'DeviantWhiteDaylight';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Deviant White Daylight',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155514
       * type : rational64s
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:DeviantWhiteDaylight',
      'desc' => [
        'en' => 'Deviant White Daylight',
      ],
    ],
  ];

}
