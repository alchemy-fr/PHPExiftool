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
class ImageHeight extends AbstractTagGroup
{

  protected string $id = 'RIFF:ImageHeight';

  protected string $name = 'ImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Height',
    'fr' => 'Hauteur d\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::AVIHeader
       * line : 327306
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::AVIHeader.RIFF:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    1 => [
      /**
       * table_name : RIFF::VP8
       * line : 329322
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::VP8.RIFF:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    2 => [
      /**
       * table_name : RIFF::VP8L
       * line : 329365
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::VP8L.RIFF:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
    3 => [
      /**
       * table_name : RIFF::VP8X
       * line : 329405
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::VP8X.RIFF:ImageHeight',
      'desc' => [
        'en' => 'Image Height',
        'fr' => 'Hauteur d\'image',
      ],
    ],
  ];

}
