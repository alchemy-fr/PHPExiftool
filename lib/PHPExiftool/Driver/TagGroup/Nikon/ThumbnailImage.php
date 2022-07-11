<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImage extends AbstractTagGroup
{

  protected string $id = 'Nikon:ThumbnailImage';

  protected string $name = 'ThumbnailImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail Image',
    'fr' => 'Vignette',
  ];

  protected int $count = 0;

  protected int $flags = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::AVI
       * line : 191446
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'Nikon::AVI.Nikon:ThumbnailImage',
      'desc' => [
        'en' => 'Thumbnail Image',
        'fr' => 'Vignette',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCDT
       * line : 202421
       * type : undef
       * writable : false
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'Nikon::NCDT.Nikon:ThumbnailImage',
      'desc' => [
        'en' => 'Thumbnail Image',
        'fr' => 'Vignette',
      ],
    ],
  ];

}
