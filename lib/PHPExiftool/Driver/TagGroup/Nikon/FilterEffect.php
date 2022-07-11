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
class FilterEffect extends AbstractTagGroup
{

  protected string $id = 'Nikon:FilterEffect';

  protected string $name = 'FilterEffect';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Filter Effect',
    'fr' => 'Effet de filtre',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::PictureControl
       * line : 204104
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl.Nikon:FilterEffect',
      'desc' => [
        'en' => 'Filter Effect',
        'fr' => 'Effet de filtre',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::PictureControl2
       * line : 204427
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl2.Nikon:FilterEffect',
      'desc' => [
        'en' => 'Filter Effect',
        'fr' => 'Effet de filtre',
      ],
    ],
    2 => [
      /**
       * table_name : Nikon::PictureControl3
       * line : 204753
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::PictureControl3.Nikon:FilterEffect',
      'desc' => [
        'en' => 'Filter Effect',
        'fr' => 'Effet de filtre',
      ],
    ],
  ];

}
