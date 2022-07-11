<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageRotated extends AbstractTagGroup
{

  protected string $id = 'Kodak:ImageRotated';

  protected string $name = 'ImageRotated';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Rotated',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Type5
       * line : 160678
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Type5.Kodak:ImageRotated',
      'desc' => [
        'en' => 'Image Rotated',
      ],
    ],
  ];

}
