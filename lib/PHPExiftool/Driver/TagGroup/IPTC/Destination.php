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
class Destination extends AbstractTagGroup
{

  protected string $id = 'IPTC:Destination';

  protected string $name = 'Destination';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Destination',
  ];

  protected int $count = 1024;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::EnvelopeRecord
       * line : 151344
       * type : string
       * writable : true
       * count : 1024
       * flags : List
       */
      'id' => 'IPTC::EnvelopeRecord.IPTC:Destination',
      'desc' => [
        'en' => 'Destination',
      ],
    ],
  ];

}
