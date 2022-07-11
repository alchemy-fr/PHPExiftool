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
class KodakVersion extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:KodakVersion';

  protected string $name = 'KodakVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Kodak Version',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155018
       * type : int8u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:KodakVersion',
      'desc' => [
        'en' => 'Kodak Version',
      ],
    ],
  ];

}
