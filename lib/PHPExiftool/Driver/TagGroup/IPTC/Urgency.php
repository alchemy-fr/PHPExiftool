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
class Urgency extends AbstractTagGroup
{

  protected string $id = 'IPTC:Urgency';

  protected string $name = 'Urgency';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Urgency',
    'fr' => 'Urgence',
  ];

  protected int $count = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150118
       * type : digits
       * writable : true
       * count : 1
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:Urgency',
      'desc' => [
        'en' => 'Urgency',
        'fr' => 'Urgence',
      ],
    ],
  ];

}
