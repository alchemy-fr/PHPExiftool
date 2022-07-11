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
class QTableMedium100Pct extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:QTableMedium100Pct';

  protected string $name = 'QTableMedium100Pct';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Q Table Medium 100 Pct',
  ];

  protected int $count = 0;

  protected int $flags = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156297
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:QTableMedium100Pct',
      'desc' => [
        'en' => 'Q Table Medium 100 Pct',
      ],
    ],
  ];

}
