<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ArtworkCircaDateCreated extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:ArtworkCircaDateCreated';

  protected string $name = 'ArtworkCircaDateCreated';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Artwork Circa Date Created',
  ];

  protected int $count = 0;

  protected int $flags = 80;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409427
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List,Unsafe
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:ArtworkCircaDateCreated',
      'desc' => [
        'en' => 'Artwork Circa Date Created',
      ],
    ],
  ];

}
