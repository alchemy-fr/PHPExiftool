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
class CodedCharacterSet extends AbstractTagGroup
{

  protected string $id = 'IPTC:CodedCharacterSet';

  protected string $name = 'CodedCharacterSet';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Coded Character Set',
    'fr' => 'Jeu de caractères codé',
  ];

  protected int $count = 32;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::EnvelopeRecord
       * line : 151640
       * type : string
       * writable : true
       * count : 32
       * flags : Unsafe
       */
      'id' => 'IPTC::EnvelopeRecord.IPTC:CodedCharacterSet',
      'desc' => [
        'en' => 'Coded Character Set',
        'fr' => 'Jeu de caractères codé',
      ],
    ],
  ];

}
