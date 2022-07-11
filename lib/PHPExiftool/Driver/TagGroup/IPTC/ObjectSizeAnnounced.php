<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObjectSizeAnnounced extends AbstractTagGroup
{

  protected string $id = 'IPTC:ObjectSizeAnnounced';

  protected string $name = 'ObjectSizeAnnounced';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Object Size Announced',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::PreObjectData
       * line : 152309
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'IPTC::PreObjectData.IPTC:ObjectSizeAnnounced',
      'desc' => [
        'en' => 'Object Size Announced',
      ],
    ],
  ];

}
