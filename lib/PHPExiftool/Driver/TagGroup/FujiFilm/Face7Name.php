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
class Face7Name extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:Face7Name';

  protected string $name = 'Face7Name';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Face 7 Name',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::FaceRecInfo
       * line : 128884
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::FaceRecInfo.FujiFilm:Face7Name',
      'desc' => [
        'en' => 'Face 7 Name',
      ],
    ],
  ];

}
