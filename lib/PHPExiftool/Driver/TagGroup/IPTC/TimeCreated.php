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
class TimeCreated extends AbstractTagGroup
{

  protected string $id = 'IPTC:TimeCreated';

  protected string $name = 'TimeCreated';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Time Created',
    'fr' => 'Heure de création',
  ];

  protected int $count = 11;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150458
       * type : string
       * writable : true
       * count : 11
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:TimeCreated',
      'desc' => [
        'en' => 'Time Created',
        'fr' => 'Heure de création',
      ],
    ],
  ];

}
