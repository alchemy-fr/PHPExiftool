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
class DateSent extends AbstractTagGroup
{

  protected string $id = 'IPTC:DateSent';

  protected string $name = 'DateSent';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Date Sent',
    'fr' => 'Date d\'envoi',
  ];

  protected int $count = 8;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::EnvelopeRecord
       * line : 151617
       * type : digits
       * writable : true
       * count : 8
       * flags : 
       */
      'id' => 'IPTC::EnvelopeRecord.IPTC:DateSent',
      'desc' => [
        'en' => 'Date Sent',
        'fr' => 'Date d\'envoi',
      ],
    ],
  ];

}
