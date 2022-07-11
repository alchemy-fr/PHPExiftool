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
class FaceElementSelected extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:FaceElementSelected';

  protected string $name = 'FaceElementSelected';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Face Element Selected',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::Main
       * line : 131296
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'FujiFilm::Main.FujiFilm:FaceElementSelected',
      'desc' => [
        'en' => 'Face Element Selected',
      ],
    ],
  ];

}
