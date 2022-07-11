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
class ArtworkCreator extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:ArtworkCreator';

  protected string $name = 'ArtworkCreator';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Artwork Creator',
    'fr' => 'Créateur de l\'Illustration',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409440
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:ArtworkCreator',
      'desc' => [
        'en' => 'Artwork Creator',
        'fr' => 'Créateur de l\'Illustration',
      ],
    ],
  ];

}
