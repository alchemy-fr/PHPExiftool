<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GDepth;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Far extends AbstractTagGroup
{

  protected string $id = 'XMP-GDepth:Far';

  protected string $name = 'Far';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Far',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GDepth
       * line : 397269
       * type : real
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::GDepth.XMP-GDepth:Far',
      'desc' => [
        'en' => 'Far',
      ],
    ],
  ];

}
