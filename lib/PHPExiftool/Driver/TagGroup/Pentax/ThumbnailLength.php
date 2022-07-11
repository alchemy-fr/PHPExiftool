<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailLength extends AbstractTagGroup
{

  protected string $id = 'Pentax:ThumbnailLength';

  protected string $name = 'ThumbnailLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail Length',
    'fr' => 'Longueur de la vignette',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Junk2
       * line : 288744
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Junk2.Pentax:ThumbnailLength',
      'desc' => [
        'en' => 'Thumbnail Length',
        'fr' => 'Longueur de la vignette',
      ],
    ],
  ];

}
