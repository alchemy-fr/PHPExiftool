<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakBordersIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BorderName extends AbstractTagGroup
{

  protected string $id = 'KodakBordersIFD:BorderName';

  protected string $name = 'BorderName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Border Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Borders
       * line : 154660
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Kodak::Borders.KodakBordersIFD:BorderName',
      'desc' => [
        'en' => 'Border Name',
      ],
    ],
  ];

}
