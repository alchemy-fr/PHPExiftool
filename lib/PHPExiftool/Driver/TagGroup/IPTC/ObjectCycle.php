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
class ObjectCycle extends AbstractTagGroup
{

  protected string $id = 'IPTC:ObjectCycle';

  protected string $name = 'ObjectCycle';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Object Cycle',
    'fr' => 'Cycle d\'objet',
  ];

  protected int $count = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150513
       * type : string
       * writable : true
       * count : 1
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:ObjectCycle',
      'desc' => [
        'en' => 'Object Cycle',
        'fr' => 'Cycle d\'objet',
      ],
    ],
  ];

}
