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
class Dictionary extends AbstractTagGroup
{

  protected string $id = 'FlashPix:Dictionary';

  protected string $name = 'Dictionary';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Dictionary',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::SummaryInfo
       * line : 126982
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'FlashPix::SummaryInfo.FlashPix:Dictionary',
      'desc' => [
        'en' => 'Dictionary',
      ],
    ],
  ];

}
