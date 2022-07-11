<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CFAPattern extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:CFAPattern';

  protected string $name = 'CFAPattern';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'CFA Pattern',
    'fr' => 'Matrice de filtrage couleur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 405441
       * type : struct
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:CFAPattern',
      'desc' => [
        'en' => 'CFA Pattern',
        'fr' => 'Matrice de filtrage couleur',
      ],
    ],
  ];

}
