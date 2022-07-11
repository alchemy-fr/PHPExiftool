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
class DocumentHistory extends AbstractTagGroup
{

  protected string $id = 'IPTC:DocumentHistory';

  protected string $name = 'DocumentHistory';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Document History',
    'fr' => 'Historique du document',
  ];

  protected int $count = 256;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 151302
       * type : string
       * writable : true
       * count : 256
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:DocumentHistory',
      'desc' => [
        'en' => 'Document History',
        'fr' => 'Historique du document',
      ],
    ],
  ];

}
