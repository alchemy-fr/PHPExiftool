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
class UniqueDocumentID extends AbstractTagGroup
{

  protected string $id = 'IPTC:UniqueDocumentID';

  protected string $name = 'UniqueDocumentID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unique Document ID',
    'fr' => 'ID unique de document',
  ];

  protected int $count = 128;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 151097
       * type : string
       * writable : true
       * count : 128
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:UniqueDocumentID',
      'desc' => [
        'en' => 'Unique Document ID',
        'fr' => 'ID unique de document',
      ],
    ],
  ];

}
