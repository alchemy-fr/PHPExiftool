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
class DigitalCreationTime extends AbstractTagGroup
{

  protected string $id = 'IPTC:DigitalCreationTime';

  protected string $name = 'DigitalCreationTime';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Digital Creation Time',
    'fr' => 'Heure de numérisation',
  ];

  protected int $count = 11;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150480
       * type : string
       * writable : true
       * count : 11
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:DigitalCreationTime',
      'desc' => [
        'en' => 'Digital Creation Time',
        'fr' => 'Heure de numérisation',
      ],
    ],
  ];

}
