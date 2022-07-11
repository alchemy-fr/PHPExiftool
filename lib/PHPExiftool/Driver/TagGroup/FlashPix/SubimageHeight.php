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
class SubimageHeight extends AbstractTagGroup
{

  protected string $id = 'FlashPix:SubimageHeight';

  protected string $name = 'SubimageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Subimage Height',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::Image
       * line : 125061
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::Image.FlashPix:SubimageHeight',
      'desc' => [
        'en' => 'Subimage Height',
      ],
    ],
    1 => [
      /**
       * table_name : FlashPix::SubimageHdr
       * line : 126959
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::SubimageHdr.FlashPix:SubimageHeight',
      'desc' => [
        'en' => 'Subimage Height',
      ],
    ],
  ];

}
