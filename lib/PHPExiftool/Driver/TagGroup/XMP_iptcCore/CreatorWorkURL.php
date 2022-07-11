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
class CreatorWorkURL extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcCore:CreatorWorkURL';

  protected string $name = 'CreatorWorkURL';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Creator Work URL',
    'fr' => 'URL professionnelle du créateur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcCore
       * line : 409342
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::iptcCore.XMP-iptcCore:CreatorWorkURL',
      'desc' => [
        'en' => 'Creator Work URL',
        'fr' => 'URL professionnelle du créateur',
      ],
    ],
  ];

}
