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
class DLOVersion extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:DLOVersion';

  protected string $name = 'DLOVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'DLO Version',
  ];

  protected int $count = 10;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DLOInfo
       * line : 80222
       * type : string
       * writable : true
       * count : 10
       * flags : 
       */
      'id' => 'CanonVRD::DLOInfo.CanonVRD:DLOVersion',
      'desc' => [
        'en' => 'DLO Version',
      ],
    ],
  ];

}
