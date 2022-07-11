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
class LockedPropertyList extends AbstractTagGroup
{

  protected string $id = 'FlashPix:LockedPropertyList';

  protected string $name = 'LockedPropertyList';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Locked Property List',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::DataObject
       * line : 124698
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::DataObject.FlashPix:LockedPropertyList',
      'desc' => [
        'en' => 'Locked Property List',
      ],
    ],
    1 => [
      /**
       * table_name : FlashPix::GlobalInfo
       * line : 124960
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::GlobalInfo.FlashPix:LockedPropertyList',
      'desc' => [
        'en' => 'Locked Property List',
      ],
    ],
    2 => [
      /**
       * table_name : FlashPix::Transform
       * line : 127674
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::Transform.FlashPix:LockedPropertyList',
      'desc' => [
        'en' => 'Locked Property List',
      ],
    ],
  ];

}
