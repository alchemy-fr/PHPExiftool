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
class By_line extends AbstractTagGroup
{

  protected string $id = 'IPTC:By-line';

  protected string $name = 'By-line';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'By-line',
    'fr' => 'Créateur',
  ];

  protected int $count = 32;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150556
       * type : string
       * writable : true
       * count : 32
       * flags : List
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:By-line',
      'desc' => [
        'en' => 'By-line',
        'fr' => 'Créateur',
      ],
    ],
  ];

}
