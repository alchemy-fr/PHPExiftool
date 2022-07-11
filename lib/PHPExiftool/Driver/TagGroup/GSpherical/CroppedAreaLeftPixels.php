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
class CroppedAreaLeftPixels extends AbstractTagGroup
{

  protected string $id = 'GSpherical:CroppedAreaLeftPixels';

  protected string $name = 'CroppedAreaLeftPixels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Cropped Area Left Pixels',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GSpherical
       * line : 397545
       * type : integer
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::GSpherical.GSpherical:CroppedAreaLeftPixels',
      'desc' => [
        'en' => 'Cropped Area Left Pixels',
      ],
    ],
  ];

}
