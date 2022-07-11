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
class CharCountWithSpaces extends AbstractTagGroup
{

  protected string $id = 'FlashPix:CharCountWithSpaces';

  protected string $name = 'CharCountWithSpaces';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Char Count With Spaces',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::DocumentInfo
       * line : 124860
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::DocumentInfo.FlashPix:CharCountWithSpaces',
      'desc' => [
        'en' => 'Char Count With Spaces',
      ],
    ],
  ];

}
