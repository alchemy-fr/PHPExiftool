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
class QltyEndOfModulation extends AbstractTagGroup
{

  protected string $id = 'MXF:QltyEndOfModulation';

  protected string $name = 'QltyEndOfModulation';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Qlty End Of Modulation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171709
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:QltyEndOfModulation',
      'desc' => [
        'en' => 'Qlty End Of Modulation',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171712
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:QltyEndOfModulation',
      'desc' => [
        'en' => 'Qlty End Of Modulation',
      ],
    ],
  ];

}
