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
class SubimageTileCount extends AbstractTagGroup
{

  protected string $id = 'FlashPix:SubimageTileCount';

  protected string $name = 'SubimageTileCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Subimage Tile Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::SubimageHdr
       * line : 126962
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::SubimageHdr.FlashPix:SubimageTileCount',
      'desc' => [
        'en' => 'Subimage Tile Count',
      ],
    ],
  ];

}
