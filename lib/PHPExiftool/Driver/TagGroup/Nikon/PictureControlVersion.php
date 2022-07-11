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
class PictureControlVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:PictureControlVersion';

  protected string $name = 'PictureControlVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Picture Control Version',
    'fr' => 'Version de l\'Optimisation d\'image',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 203958
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:PictureControlVersion',
      'desc' => [
        'en' => 'Picture Control Version',
        'fr' => 'Version de l\'Optimisation d\'image',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::PictureControl2
       * line : 204269
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl2.Nikon:PictureControlVersion',
      'desc' => [
        'en' => 'Picture Control Version',
        'fr' => 'Version de l\'Optimisation d\'image',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::PictureControl3
       * line : 204592
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl3.Nikon:PictureControlVersion',
      'desc' => [
        'en' => 'Picture Control Version',
        'fr' => 'Version de l\'Optimisation d\'image',
      ],
    ],
    3 => [
      /**
       * table_name : Nikon::PictureControlUnknown
       * line : 204918
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControlUnknown.Nikon:PictureControlVersion',
      'desc' => [
        'en' => 'Picture Control Version',
        'fr' => 'Version de l\'Optimisation d\'image',
      ],
    ],
  ];

}
