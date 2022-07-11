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
class Source extends AbstractTagGroup
{

  protected string $id = 'IPTC:Source';

  protected string $name = 'Source';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Source',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150708
       * type : string
       * writable : true
       * count : 32
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:Source',
      'desc' => [
        'en' => 'Source',
      ],
    ],
  ];

}
