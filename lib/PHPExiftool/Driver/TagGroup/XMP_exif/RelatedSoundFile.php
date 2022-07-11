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
class RelatedSoundFile extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:RelatedSoundFile';

  protected string $name = 'RelatedSoundFile';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Related Sound File',
    'fr' => 'Fichier audio apparenté',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 408061
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:RelatedSoundFile',
      'desc' => [
        'en' => 'Related Sound File',
        'fr' => 'Fichier audio apparenté',
      ],
    ],
  ];

}
