<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\InteropIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RelatedImageHeight extends AbstractTagGroup
{

  protected string $id = 'InteropIFD:RelatedImageHeight';

  protected string $name = 'RelatedImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Related Image Height',
    'fr' => 'Hauteur d\'image apparentée',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113017
       * type : int16u
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.InteropIFD:RelatedImageHeight',
      'desc' => [
        'en' => 'Related Image Height',
        'fr' => 'Hauteur d\'image apparentée',
      ],
    ],
  ];

}
