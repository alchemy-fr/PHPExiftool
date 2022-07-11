<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PictureControlAdjust extends AbstractTagGroup
{

  protected string $id = 'Nikon:PictureControlAdjust';

  protected string $name = 'PictureControlAdjust';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Control Adjust',
    'fr' => 'Ajustement de l\'optimisation d\'image',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 203982
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:PictureControlAdjust',
      'desc' => [
        'en' => 'Picture Control Adjust',
        'fr' => 'Ajustement de l\'optimisation d\'image',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::PictureControl2
       * line : 204293
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl2.Nikon:PictureControlAdjust',
      'desc' => [
        'en' => 'Picture Control Adjust',
        'fr' => 'Ajustement de l\'optimisation d\'image',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::PictureControl3
       * line : 204616
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl3.Nikon:PictureControlAdjust',
      'desc' => [
        'en' => 'Picture Control Adjust',
        'fr' => 'Ajustement de l\'optimisation d\'image',
      ],
    ],
  ];

}
