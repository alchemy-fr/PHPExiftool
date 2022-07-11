<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RAF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawImageCroppedSize extends AbstractTagGroup
{

  protected string $id = 'RAF:RawImageCroppedSize';

  protected string $name = 'RawImageCroppedSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Raw Image Cropped Size',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::RAF
       * line : 131405
       * type : int16u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'FujiFilm::RAF.RAF:RawImageCroppedSize',
      'desc' => [
        'en' => 'Raw Image Cropped Size',
      ],
    ],
  ];

}
