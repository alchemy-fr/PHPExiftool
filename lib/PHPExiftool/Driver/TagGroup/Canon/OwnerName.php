<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OwnerName extends AbstractTagGroup
{

  protected string $id = 'Canon:OwnerName';

  protected string $name = 'OwnerName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Owner Name',
    'fr' => 'Nom du propriétaire',
  ];

  protected int $count = 32;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo450D
       * line : 23907
       * type : string
       * writable : true
       * count : 32
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo450D.Canon:OwnerName',
      'desc' => [
        'en' => 'Owner Name',
        'fr' => 'Nom du propriétaire',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::Main
       * line : 64586
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:OwnerName',
      'desc' => [
        'en' => 'Owner Name',
        'fr' => 'Nom du propriétaire',
      ],
    ],
  ];

}
