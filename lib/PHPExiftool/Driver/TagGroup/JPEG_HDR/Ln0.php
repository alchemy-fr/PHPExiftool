<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPEG_HDR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Ln0 extends AbstractTagGroup
{

  protected string $id = 'JPEG-HDR:Ln0';

  protected string $name = 'Ln0';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Ln0',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::HDR
       * line : 152820
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::HDR.JPEG-HDR:Ln0',
      'desc' => [
        'en' => 'Ln0',
      ],
    ],
  ];

}
