<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JFIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailWidth extends AbstractTagGroup
{

  protected string $id = 'JFIF:ThumbnailWidth';

  protected string $name = 'ThumbnailWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail Width',
    'fr' => 'Hauteur de la vignette',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JFIF::Main
       * line : 152685
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JFIF::Main.JFIF:ThumbnailWidth',
      'desc' => [
        'en' => 'Thumbnail Width',
        'fr' => 'Hauteur de la vignette',
      ],
    ],
  ];

}
