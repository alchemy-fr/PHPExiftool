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
class CatalogSets extends AbstractTagGroup
{

  protected string $id = 'IPTC:CatalogSets';

  protected string $name = 'CatalogSets';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Catalog Sets',
  ];

  protected int $count = 256;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 151324
       * type : string
       * writable : true
       * count : 256
       * flags : List
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:CatalogSets',
      'desc' => [
        'en' => 'Catalog Sets',
      ],
    ],
  ];

}
