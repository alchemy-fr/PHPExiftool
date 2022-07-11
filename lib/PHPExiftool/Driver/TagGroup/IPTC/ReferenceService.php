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
class ReferenceService extends AbstractTagGroup
{

  protected string $id = 'IPTC:ReferenceService';

  protected string $name = 'ReferenceService';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Reference Service',
    'fr' => 'Service de référence',
  ];

  protected int $count = 10;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150407
       * type : string
       * writable : true
       * count : 10
       * flags : List
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:ReferenceService',
      'desc' => [
        'en' => 'Reference Service',
        'fr' => 'Service de référence',
      ],
    ],
  ];

}
