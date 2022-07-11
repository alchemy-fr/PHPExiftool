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
class ImageStabilization extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:ImageStabilization';

  protected string $name = 'ImageStabilization';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Stabilization',
    'fr' => 'Stabilisation d\'image',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::Main
       * line : 131060
       * type : int16u
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'FujiFilm::Main.FujiFilm:ImageStabilization',
      'desc' => [
        'en' => 'Image Stabilization',
        'fr' => 'Stabilisation d\'image',
      ],
    ],
  ];

}
