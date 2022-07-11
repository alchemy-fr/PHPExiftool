<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{

  protected string $id = 'RIFF:ImageWidth';

  protected string $name = 'ImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Width',
    'fr' => 'Largeur d\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::AVIHeader
       * line : 327288
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::AVIHeader.RIFF:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    1 => [
      /**
       * table_name : RIFF::VP8
       * line : 329301
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::VP8.RIFF:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    2 => [
      /**
       * table_name : RIFF::VP8L
       * line : 329347
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::VP8L.RIFF:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
    3 => [
      /**
       * table_name : RIFF::VP8X
       * line : 329387
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::VP8X.RIFF:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
  ];

}
