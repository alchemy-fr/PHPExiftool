<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GSpherical;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CroppedAreaImageWidthPixels extends AbstractTagGroup
{

  protected string $id = 'GSpherical:CroppedAreaImageWidthPixels';

  protected string $name = 'CroppedAreaImageWidthPixels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Cropped Area Image Width Pixels',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GSpherical
       * line : 397541
       * type : integer
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::GSpherical.GSpherical:CroppedAreaImageWidthPixels',
      'desc' => [
        'en' => 'Cropped Area Image Width Pixels',
      ],
    ],
  ];

}
