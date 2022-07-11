<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SVG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MetadataID extends AbstractTagGroup
{

  protected string $id = 'SVG:MetadataID';

  protected string $name = 'MetadataID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Metadata ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::SVG
       * line : 397888
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'XMP::SVG.SVG:MetadataID',
      'desc' => [
        'en' => 'Metadata ID',
      ],
    ],
  ];

}
