<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LastPrinted extends AbstractTagGroup
{

  protected string $id = 'FlashPix:LastPrinted';

  protected string $name = 'LastPrinted';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Last Printed',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::SummaryInfo
       * line : 127551
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::SummaryInfo.FlashPix:LastPrinted',
      'desc' => [
        'en' => 'Last Printed',
      ],
    ],
  ];

}
