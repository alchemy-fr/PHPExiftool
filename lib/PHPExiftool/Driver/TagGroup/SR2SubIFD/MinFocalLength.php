<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SR2SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MinFocalLength extends AbstractTagGroup
{

  protected string $id = 'SR2SubIFD:MinFocalLength';

  protected string $name = 'MinFocalLength';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Min Focal Length',
    'fr' => 'Focale mini',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::SR2SubIFD
       * line : 362130
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::SR2SubIFD.SR2SubIFD:MinFocalLength',
      'desc' => [
        'en' => 'Min Focal Length',
        'fr' => 'Focale mini',
      ],
    ],
  ];

}
