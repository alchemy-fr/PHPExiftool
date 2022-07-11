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
class LastModifier extends AbstractTagGroup
{

  protected string $id = 'FlashPix:LastModifier';

  protected string $name = 'LastModifier';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Last Modifier',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::DataObject
       * line : 124704
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::DataObject.FlashPix:LastModifier',
      'desc' => [
        'en' => 'Last Modifier',
      ],
    ],
    1 => [
      /**
       * table_name : FlashPix::GlobalInfo
       * line : 124966
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::GlobalInfo.FlashPix:LastModifier',
      'desc' => [
        'en' => 'Last Modifier',
      ],
    ],
    2 => [
      /**
       * table_name : FlashPix::Transform
       * line : 127680
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::Transform.FlashPix:LastModifier',
      'desc' => [
        'en' => 'Last Modifier',
      ],
    ],
  ];

}
