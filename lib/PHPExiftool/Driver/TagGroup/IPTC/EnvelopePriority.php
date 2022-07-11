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
class EnvelopePriority extends AbstractTagGroup
{

  protected string $id = 'IPTC:EnvelopePriority';

  protected string $name = 'EnvelopePriority';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Envelope Priority',
    'fr' => 'Priorité d\'enveloppe',
  ];

  protected int $count = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::EnvelopeRecord
       * line : 151530
       * type : digits
       * writable : true
       * count : 1
       * flags : 
       */
      'id' => 'IPTC::EnvelopeRecord.IPTC:EnvelopePriority',
      'desc' => [
        'en' => 'Envelope Priority',
        'fr' => 'Priorité d\'enveloppe',
      ],
    ],
  ];

}
