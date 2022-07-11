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
class XAttrMDItemWhereFroms extends AbstractTagGroup
{

  protected string $id = 'MacOS:XAttrMDItemWhereFroms';

  protected string $name = 'XAttrMDItemWhereFroms';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'X Attr MD Item Where Froms',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MacOS::XAttr
       * line : 173483
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MacOS::XAttr.MacOS:XAttrMDItemWhereFroms',
      'desc' => [
        'en' => 'X Attr MD Item Where Froms',
      ],
    ],
  ];

}
