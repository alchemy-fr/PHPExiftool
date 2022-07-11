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
class Province_State extends AbstractTagGroup
{

  protected string $id = 'IPTC:Province-State';

  protected string $name = 'Province-State';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Province-State',
    'fr' => 'État / Région',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150614
       * type : string
       * writable : true
       * count : 32
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:Province-State',
      'desc' => [
        'en' => 'Province-State',
        'fr' => 'État / Région',
      ],
    ],
  ];

}
