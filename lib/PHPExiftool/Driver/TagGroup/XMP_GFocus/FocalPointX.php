<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GFocus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalPointX extends AbstractTagGroup
{

  protected string $id = 'XMP-GFocus:FocalPointX';

  protected string $name = 'FocalPointX';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focal Point X',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GFocus
       * line : 397401
       * type : real
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GFocus.XMP-GFocus:FocalPointX',
      'desc' => [
        'en' => 'Focal Point X',
      ],
    ],
  ];

}
