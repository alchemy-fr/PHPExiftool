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
class DLOData extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:DLOData';

  protected string $name = 'DLOData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'DLO Data',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DLOInfo
       * line : 80225
       * type : undef
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'CanonVRD::DLOInfo.CanonVRD:DLOData',
      'desc' => [
        'en' => 'DLO Data',
      ],
    ],
  ];

}
