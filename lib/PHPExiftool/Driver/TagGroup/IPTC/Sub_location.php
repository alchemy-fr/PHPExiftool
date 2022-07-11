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
class Sub_location extends AbstractTagGroup
{

  protected string $id = 'IPTC:Sub-location';

  protected string $name = 'Sub-location';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sub-location',
    'fr' => 'Lieu',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150603
       * type : string
       * writable : true
       * count : 32
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:Sub-location',
      'desc' => [
        'en' => 'Sub-location',
        'fr' => 'Lieu',
      ],
    ],
  ];

}
