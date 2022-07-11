<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObsoletePhotoshopTag3 extends AbstractTagGroup
{

  protected string $id = 'Photoshop:ObsoletePhotoshopTag3';

  protected string $name = 'ObsoletePhotoshopTag3';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Obsolete Photoshop Tag 3',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 305821
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Photoshop::Main.Photoshop:ObsoletePhotoshopTag3',
      'desc' => [
        'en' => 'Obsolete Photoshop Tag 3',
      ],
    ],
  ];

}
