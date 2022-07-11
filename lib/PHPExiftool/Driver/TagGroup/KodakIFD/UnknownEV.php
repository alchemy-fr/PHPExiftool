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
class UnknownEV extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:UnknownEV';

  protected string $name = 'UnknownEV';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unknown EV',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 155021
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Kodak::IFD.KodakIFD:UnknownEV',
      'desc' => [
        'en' => 'Unknown EV',
      ],
    ],
  ];

}
