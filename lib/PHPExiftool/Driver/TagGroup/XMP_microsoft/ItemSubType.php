<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ItemSubType extends AbstractTagGroup
{

  protected string $id = 'XMP-microsoft:ItemSubType';

  protected string $name = 'ItemSubType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Item Sub Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::XMP
       * line : 174703
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Microsoft::XMP.XMP-microsoft:ItemSubType',
      'desc' => [
        'en' => 'Item Sub Type',
      ],
    ],
  ];

}
