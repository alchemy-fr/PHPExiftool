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
class DustDeleteApplied extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:DustDeleteApplied';

  protected string $name = 'DustDeleteApplied';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Dust Delete Applied',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DustInfo
       * line : 81983
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DustInfo.CanonVRD:DustDeleteApplied',
      'desc' => [
        'en' => 'Dust Delete Applied',
      ],
    ],
  ];

}
