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
class BorderType extends AbstractTagGroup
{

  protected string $id = 'KodakBordersIFD:BorderType';

  protected string $name = 'BorderType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Border Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Borders
       * line : 154672
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Kodak::Borders.KodakBordersIFD:BorderType',
      'desc' => [
        'en' => 'Border Type',
      ],
    ],
  ];

}
