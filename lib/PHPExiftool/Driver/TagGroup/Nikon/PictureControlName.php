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
class PictureControlName extends AbstractTagGroup
{

  protected string $id = 'Nikon:PictureControlName';

  protected string $name = 'PictureControlName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Control Name',
    'fr' => 'Nom de l\'optimisation d\'image',
  ];

  protected int $count = 20;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 203966
       * type : string
       * writable : true
       * count : 20
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:PictureControlName',
      'desc' => [
        'en' => 'Picture Control Name',
        'fr' => 'Nom de l\'optimisation d\'image',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::PictureControl2
       * line : 204277
       * type : string
       * writable : true
       * count : 20
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl2.Nikon:PictureControlName',
      'desc' => [
        'en' => 'Picture Control Name',
        'fr' => 'Nom de l\'optimisation d\'image',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::PictureControl3
       * line : 204600
       * type : string
       * writable : true
       * count : 20
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl3.Nikon:PictureControlName',
      'desc' => [
        'en' => 'Picture Control Name',
        'fr' => 'Nom de l\'optimisation d\'image',
      ],
    ],
  ];

}
