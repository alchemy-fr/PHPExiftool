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
class CreatorContactInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcCore:CreatorContactInfo';

  protected string $name = 'CreatorContactInfo';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Creator Contact Info',
    'fr' => 'Contact créateur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcCore
       * line : 409265
       * type : struct
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::iptcCore.XMP-iptcCore:CreatorContactInfo',
      'desc' => [
        'en' => 'Creator Contact Info',
        'fr' => 'Contact créateur',
      ],
    ],
  ];

}
