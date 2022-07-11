<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RFLensMFFocusRingSensitivity extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:RFLensMFFocusRingSensitivity';

  protected string $name = 'RFLensMFFocusRingSensitivity';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'RF Lens MF Focus Ring Sensitivity',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 75341
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:RFLensMFFocusRingSensitivity',
      'desc' => [
        'en' => 'RF Lens MF Focus Ring Sensitivity',
      ],
    ],
  ];

}
