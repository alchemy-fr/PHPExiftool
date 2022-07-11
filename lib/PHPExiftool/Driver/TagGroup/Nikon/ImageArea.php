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
class ImageArea extends AbstractTagGroup
{

  protected string $id = 'Nikon:ImageArea';

  protected string $name = 'ImageArea';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Area',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoD3S
       * line : 206367
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3S.Nikon:ImageArea',
      'desc' => [
        'en' => 'Image Area',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::ShotInfoD3b
       * line : 206546
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoD3b.Nikon:ImageArea',
      'desc' => [
        'en' => 'Image Area',
      ],
    ],
  ];

}
