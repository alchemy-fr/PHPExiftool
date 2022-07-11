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
class XAttrMDLabel extends AbstractTagGroup
{

  protected string $id = 'MacOS:XAttrMDLabel';

  protected string $name = 'XAttrMDLabel';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'X Attr MD Label',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : MacOS::XAttr
       * line : 173487
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'MacOS::XAttr.MacOS:XAttrMDLabel',
      'desc' => [
        'en' => 'X Attr MD Label',
      ],
    ],
  ];

}
