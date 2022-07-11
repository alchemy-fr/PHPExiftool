<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GDepth;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{

  protected string $id = 'XMP-GDepth:ImageWidth';

  protected string $name = 'ImageWidth';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image Width',
    'fr' => 'Largeur d\'image',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GDepth
       * line : 397306
       * type : real
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::GDepth.XMP-GDepth:ImageWidth',
      'desc' => [
        'en' => 'Image Width',
        'fr' => 'Largeur d\'image',
      ],
    ],
  ];

}
