<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v1_Enh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StartTime extends AbstractTagGroup
{

  protected string $id = 'ID3v1_Enh:StartTime';

  protected string $name = 'StartTime';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Start Time',
  ];

  protected int $count = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : ID3::v1_Enh
       * line : 148350
       * type : string
       * writable : false
       * count : 6
       * flags : 
       */
      'id' => 'ID3::v1_Enh.ID3v1_Enh:StartTime',
      'desc' => [
        'en' => 'Start Time',
      ],
    ],
  ];

}
