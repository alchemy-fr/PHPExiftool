<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageStart extends AbstractTagGroup
{

  protected string $id = 'IFD0:PreviewImageStart';

  protected string $name = 'PreviewImageStart';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image Start',
    'fr' => 'Début d\'image miniature',
  ];

  protected int $count = 0;

  protected int $flags = 12;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 110996
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Exif::Main.IFD0:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 112664
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Exif::Main.IFD0:PreviewImageStart',
      'desc' => [
        'en' => 'Preview Image Start',
        'fr' => 'Début d\'image miniature',
      ],
    ],
  ];

}
