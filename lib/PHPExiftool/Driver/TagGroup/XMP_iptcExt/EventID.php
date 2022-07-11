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
class EventID extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:EventID';

  protected string $name = 'EventID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Event ID',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409648
       * type : string
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:EventID',
      'desc' => [
        'en' => 'Event ID',
      ],
    ],
  ];

}
