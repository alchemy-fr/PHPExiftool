<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_mediapro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CatalogSets extends AbstractTagGroup
{

  protected string $id = 'XMP-mediapro:CatalogSets';

  protected string $name = 'CatalogSets';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Catalog Sets',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::MediaPro
       * line : 397737
       * type : string
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'XMP::MediaPro.XMP-mediapro:CatalogSets',
      'desc' => [
        'en' => 'Catalog Sets',
      ],
    ],
  ];

}
