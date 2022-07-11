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
class SubimageTileWidth extends AbstractTagGroup
{

  protected string $id = 'FlashPix:SubimageTileWidth';

  protected string $name = 'SubimageTileWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Subimage Tile Width',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::SubimageHdr
       * line : 126965
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::SubimageHdr.FlashPix:SubimageTileWidth',
      'desc' => [
        'en' => 'Subimage Tile Width',
      ],
    ],
  ];

}
