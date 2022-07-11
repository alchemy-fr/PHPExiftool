<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GImage;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageMimeType extends AbstractTagGroup
{

  protected string $id = 'XMP-GImage:ImageMimeType';

  protected string $name = 'ImageMimeType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Mime Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GImage
       * line : 397418
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GImage.XMP-GImage:ImageMimeType',
      'desc' => [
        'en' => 'Image Mime Type',
      ],
    ],
  ];

}
