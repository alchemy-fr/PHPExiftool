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
class PreviewColorSpace extends AbstractTagGroup
{

  protected string $id = 'IFD0:PreviewColorSpace';

  protected string $name = 'PreviewColorSpace';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Color Space',
    'fr' => 'Espace de couleur de l\'aperçu',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120594
       * type : int32u
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:PreviewColorSpace',
      'desc' => [
        'en' => 'Preview Color Space',
        'fr' => 'Espace de couleur de l\'aperçu',
      ],
    ],
  ];

}
