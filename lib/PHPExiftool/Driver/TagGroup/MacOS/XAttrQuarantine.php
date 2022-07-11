<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MacOS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XAttrQuarantine extends AbstractTagGroup
{

  protected string $id = 'MacOS:XAttrQuarantine';

  protected string $name = 'XAttrQuarantine';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'X Attr Quarantine',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : MacOS::XAttr
       * line : 173491
       * type : ?
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'MacOS::XAttr.MacOS:XAttrQuarantine',
      'desc' => [
        'en' => 'X Attr Quarantine',
      ],
    ],
  ];

}
