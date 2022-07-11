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
class EnvelopeNumber extends AbstractTagGroup
{

  protected string $id = 'IPTC:EnvelopeNumber';

  protected string $name = 'EnvelopeNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Envelope Number',
    'fr' => 'Numéro d\'enveloppe',
  ];

  protected int $count = 8;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::EnvelopeRecord
       * line : 151509
       * type : digits
       * writable : true
       * count : 8
       * flags : 
       */
      'id' => 'IPTC::EnvelopeRecord.IPTC:EnvelopeNumber',
      'desc' => [
        'en' => 'Envelope Number',
        'fr' => 'Numéro d\'enveloppe',
      ],
    ],
  ];

}
