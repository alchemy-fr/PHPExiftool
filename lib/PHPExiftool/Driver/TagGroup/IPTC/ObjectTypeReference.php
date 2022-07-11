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
class ObjectTypeReference extends AbstractTagGroup
{

  protected string $id = 'IPTC:ObjectTypeReference';

  protected string $name = 'ObjectTypeReference';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Object Type Reference',
    'fr' => 'Référence de type d\'objet',
  ];

  protected int $count = 67;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150051
       * type : string
       * writable : true
       * count : 67
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:ObjectTypeReference',
      'desc' => [
        'en' => 'Object Type Reference',
        'fr' => 'Référence de type d\'objet',
      ],
    ],
  ];

}
