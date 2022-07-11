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
class XAttrMDItemDownloadedDate extends AbstractTagGroup
{

  protected string $id = 'MacOS:XAttrMDItemDownloadedDate';

  protected string $name = 'XAttrMDItemDownloadedDate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'X Attr MD Item Downloaded Date',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MacOS::XAttr
       * line : 173475
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MacOS::XAttr.MacOS:XAttrMDItemDownloadedDate',
      'desc' => [
        'en' => 'X Attr MD Item Downloaded Date',
      ],
    ],
  ];

}
