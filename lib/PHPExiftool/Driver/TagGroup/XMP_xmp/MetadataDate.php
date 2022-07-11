<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MetadataDate extends AbstractTagGroup
{

  protected string $id = 'XMP-xmp:MetadataDate';

  protected string $name = 'MetadataDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Metadata Date',
    'fr' => 'Date des metadonnées',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmp
       * line : 412994
       * type : date
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::xmp.XMP-xmp:MetadataDate',
      'desc' => [
        'en' => 'Metadata Date',
        'fr' => 'Date des metadonnées',
      ],
    ],
  ];

}
