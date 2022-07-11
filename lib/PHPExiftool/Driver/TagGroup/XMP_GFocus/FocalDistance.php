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
class FocalDistance extends AbstractTagGroup
{

  protected string $id = 'XMP-GFocus:FocalDistance';

  protected string $name = 'FocalDistance';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Focal Distance',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GFocus
       * line : 397397
       * type : real
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GFocus.XMP-GFocus:FocalDistance',
      'desc' => [
        'en' => 'Focal Distance',
      ],
    ],
  ];

}
