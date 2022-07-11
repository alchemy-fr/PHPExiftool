<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_swf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaxStorage extends AbstractTagGroup
{

  protected string $id = 'XMP-swf:MaxStorage';

  protected string $name = 'MaxStorage';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Storage',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::swf
       * line : 411701
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::swf.XMP-swf:MaxStorage',
      'desc' => [
        'en' => 'Max Storage',
      ],
    ],
  ];

}
