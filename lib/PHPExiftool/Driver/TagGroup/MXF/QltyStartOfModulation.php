<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class QltyStartOfModulation extends AbstractTagGroup
{

  protected string $id = 'MXF:QltyStartOfModulation';

  protected string $name = 'QltyStartOfModulation';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Qlty Start Of Modulation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171697
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:QltyStartOfModulation',
      'desc' => [
        'en' => 'Qlty Start Of Modulation',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171700
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:QltyStartOfModulation',
      'desc' => [
        'en' => 'Qlty Start Of Modulation',
      ],
    ],
  ];

}
