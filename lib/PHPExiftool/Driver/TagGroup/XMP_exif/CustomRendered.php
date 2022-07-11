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
class CustomRendered extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:CustomRendered';

  protected string $name = 'CustomRendered';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Custom Rendered',
    'fr' => 'Traitement d\'image personnalisé',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 405650
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:CustomRendered',
      'desc' => [
        'en' => 'Custom Rendered',
        'fr' => 'Traitement d\'image personnalisé',
      ],
    ],
  ];

}
