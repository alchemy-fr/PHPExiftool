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
class DocumentNotes extends AbstractTagGroup
{

  protected string $id = 'IPTC:DocumentNotes';

  protected string $name = 'DocumentNotes';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Document Notes',
    'fr' => 'Remarques sur le document',
  ];

  protected int $count = 1024;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 151291
       * type : string
       * writable : true
       * count : 1024
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:DocumentNotes',
      'desc' => [
        'en' => 'Document Notes',
        'fr' => 'Remarques sur le document',
      ],
    ],
  ];

}
