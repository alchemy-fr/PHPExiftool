<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LastKeywordIPTC extends AbstractTagGroup
{

  protected string $id = 'XMP-microsoft:LastKeywordIPTC';

  protected string $name = 'LastKeywordIPTC';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Last Keyword IPTC',
    'fr' => 'Dernier mot-clé IPTC',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::XMP
       * line : 174707
       * type : string
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'Microsoft::XMP.XMP-microsoft:LastKeywordIPTC',
      'desc' => [
        'en' => 'Last Keyword IPTC',
        'fr' => 'Dernier mot-clé IPTC',
      ],
    ],
  ];

}
