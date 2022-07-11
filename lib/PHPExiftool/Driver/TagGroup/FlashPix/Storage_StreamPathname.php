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
class Storage_StreamPathname extends AbstractTagGroup
{

  protected string $id = 'FlashPix:Storage-StreamPathname';

  protected string $name = 'Storage-StreamPathname';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Storage-Stream Pathname',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::Extensions
       * line : 124932
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::Extensions.FlashPix:Storage-StreamPathname',
      'desc' => [
        'en' => 'Storage-Stream Pathname',
      ],
    ],
  ];

}
