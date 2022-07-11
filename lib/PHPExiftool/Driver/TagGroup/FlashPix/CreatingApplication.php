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
class CreatingApplication extends AbstractTagGroup
{

  protected string $id = 'FlashPix:CreatingApplication';

  protected string $name = 'CreatingApplication';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Creating Application',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::DataObject
       * line : 124722
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::DataObject.FlashPix:CreatingApplication',
      'desc' => [
        'en' => 'Creating Application',
      ],
    ],
    1 => [
      /**
       * table_name : FlashPix::Extensions
       * line : 124926
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::Extensions.FlashPix:CreatingApplication',
      'desc' => [
        'en' => 'Creating Application',
      ],
    ],
    2 => [
      /**
       * table_name : FlashPix::Transform
       * line : 127698
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::Transform.FlashPix:CreatingApplication',
      'desc' => [
        'en' => 'Creating Application',
      ],
    ],
  ];

}
