<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BrightnessValue extends AbstractTagGroup
{

  protected string $id = 'Kodak:BrightnessValue';

  protected string $name = 'BrightnessValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Brightness Value',
    'fr' => 'Luminosité',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Free
       * line : 154848
       * type : int32s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Free.Kodak:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::TextualInfo
       * line : 159802
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::TextualInfo.Kodak:BrightnessValue',
      'desc' => [
        'en' => 'Brightness Value',
        'fr' => 'Luminosité',
      ],
    ],
  ];

}
