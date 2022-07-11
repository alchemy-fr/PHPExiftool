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
class FlashPixStreamPathname extends AbstractTagGroup
{

  protected string $id = 'FlashPix:FlashPixStreamPathname';

  protected string $name = 'FlashPixStreamPathname';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Flash Pix Stream Pathname',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::Extensions
       * line : 124935
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::Extensions.FlashPix:FlashPixStreamPathname',
      'desc' => [
        'en' => 'Flash Pix Stream Pathname',
      ],
    ],
  ];

}
