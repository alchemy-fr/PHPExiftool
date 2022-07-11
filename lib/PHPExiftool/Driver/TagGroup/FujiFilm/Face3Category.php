<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiFilm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Face3Category extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:Face3Category';

  protected string $name = 'Face3Category';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Face 3 Category',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::FaceRecInfo
       * line : 128785
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::FaceRecInfo.FujiFilm:Face3Category',
      'desc' => [
        'en' => 'Face 3 Category',
      ],
    ],
  ];

}
