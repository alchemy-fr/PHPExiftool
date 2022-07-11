<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_digiKam;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageHistory extends AbstractTagGroup
{

  protected string $id = 'XMP-digiKam:ImageHistory';

  protected string $name = 'ImageHistory';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Image History',
    'fr' => 'Historique de l\'image',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::digiKam
       * line : 405363
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::digiKam.XMP-digiKam:ImageHistory',
      'desc' => [
        'en' => 'Image History',
        'fr' => 'Historique de l\'image',
      ],
    ],
  ];

}
