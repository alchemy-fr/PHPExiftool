<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VBRFrames extends AbstractTagGroup
{

  protected string $id = 'MPEG:VBRFrames';

  protected string $name = 'VBRFrames';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'VBR Frames',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPEG::Xing
       * line : 166468
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPEG::Xing.MPEG:VBRFrames',
      'desc' => [
        'en' => 'VBR Frames',
      ],
    ],
  ];

}
