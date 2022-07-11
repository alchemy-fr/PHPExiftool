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
class TimeSent extends AbstractTagGroup
{

  protected string $id = 'IPTC:TimeSent';

  protected string $name = 'TimeSent';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Time Sent',
    'fr' => 'Heure d\'envoi',
  ];

  protected int $count = 11;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::EnvelopeRecord
       * line : 151629
       * type : string
       * writable : true
       * count : 11
       * flags : 
       */
      'id' => 'IPTC::EnvelopeRecord.IPTC:TimeSent',
      'desc' => [
        'en' => 'Time Sent',
        'fr' => 'Heure d\'envoi',
      ],
    ],
  ];

}
