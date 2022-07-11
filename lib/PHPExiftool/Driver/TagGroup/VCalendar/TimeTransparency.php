<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\VCalendar;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeTransparency extends AbstractTagGroup
{

  protected string $id = 'VCalendar:TimeTransparency';

  protected string $name = 'TimeTransparency';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Time Transparency',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : VCard::VCalendar
       * line : 395861
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'VCard::VCalendar.VCalendar:TimeTransparency',
      'desc' => [
        'en' => 'Time Transparency',
      ],
    ],
  ];

}
