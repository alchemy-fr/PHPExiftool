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
class Caption_Abstract extends AbstractTagGroup
{

  protected string $id = 'IPTC:Caption-Abstract';

  protected string $name = 'Caption-Abstract';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Caption-Abstract',
    'fr' => 'Légende / Description',
  ];

  protected int $count = 2000;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150753
       * type : string
       * writable : true
       * count : 2000
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:Caption-Abstract',
      'desc' => [
        'en' => 'Caption-Abstract',
        'fr' => 'Légende / Description',
      ],
    ],
  ];

}
