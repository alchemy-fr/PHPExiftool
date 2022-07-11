<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StampToolCount extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:StampToolCount';

  protected string $name = 'StampToolCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Stamp Tool Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::StampInfo
       * line : 82103
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::StampInfo.CanonVRD:StampToolCount',
      'desc' => [
        'en' => 'Stamp Tool Count',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::StampTool
       * line : 82110
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::StampTool.CanonVRD:StampToolCount',
      'desc' => [
        'en' => 'Stamp Tool Count',
      ],
    ],
  ];

}
