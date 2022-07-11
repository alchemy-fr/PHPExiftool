<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcCore;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IntellectualGenre extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcCore:IntellectualGenre';

  protected string $name = 'IntellectualGenre';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Intellectual Genre',
    'fr' => 'Genre intellectuel',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcCore
       * line : 409355
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::iptcCore.XMP-iptcCore:IntellectualGenre',
      'desc' => [
        'en' => 'Intellectual Genre',
        'fr' => 'Genre intellectuel',
      ],
    ],
  ];

}
