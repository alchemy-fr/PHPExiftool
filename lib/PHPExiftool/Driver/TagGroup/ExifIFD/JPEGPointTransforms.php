<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JPEGPointTransforms extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:JPEGPointTransforms';

  protected string $name = 'JPEGPointTransforms';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'JPEG Point Transforms',
    'fr' => 'Transformations de point JPEG',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 112797
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:JPEGPointTransforms',
      'desc' => [
        'en' => 'JPEG Point Transforms',
        'fr' => 'Transformations de point JPEG',
      ],
    ],
  ];

}
