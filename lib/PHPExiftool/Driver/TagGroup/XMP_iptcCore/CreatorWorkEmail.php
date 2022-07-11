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
class CreatorWorkEmail extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcCore:CreatorWorkEmail';

  protected string $name = 'CreatorWorkEmail';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Creator Work Email',
    'fr' => 'Courriel professionnel du créateur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcCore
       * line : 409322
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::iptcCore.XMP-iptcCore:CreatorWorkEmail',
      'desc' => [
        'en' => 'Creator Work Email',
        'fr' => 'Courriel professionnel du créateur',
      ],
    ],
  ];

}
