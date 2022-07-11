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
class UniqueObjectName extends AbstractTagGroup
{

  protected string $id = 'IPTC:UniqueObjectName';

  protected string $name = 'UniqueObjectName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unique Object Name',
    'fr' => 'Nom Unique d\'Objet',
  ];

  protected int $count = 80;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::EnvelopeRecord
       * line : 151652
       * type : string
       * writable : true
       * count : 80
       * flags : 
       */
      'id' => 'IPTC::EnvelopeRecord.IPTC:UniqueObjectName',
      'desc' => [
        'en' => 'Unique Object Name',
        'fr' => 'Nom Unique d\'Objet',
      ],
    ],
  ];

}
