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
class JPEGTables extends AbstractTagGroup
{

  protected string $id = 'FlashPix:JPEGTables';

  protected string $name = 'JPEGTables';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'JPEG Tables',
    'fr' => 'Tableaux JPEG',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::Image
       * line : 125145
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'FlashPix::Image.FlashPix:JPEGTables',
      'desc' => [
        'en' => 'JPEG Tables',
        'fr' => 'Tableaux JPEG',
      ],
    ],
  ];

}
