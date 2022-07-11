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
class RawBrightnessAdj extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:RawBrightnessAdj';

  protected string $name = 'RawBrightnessAdj';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Brightness Adj',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80296
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:RawBrightnessAdj',
      'desc' => [
        'en' => 'Raw Brightness Adj',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82334
       * type : int32s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:RawBrightnessAdj',
      'desc' => [
        'en' => 'Raw Brightness Adj',
      ],
    ],
  ];

}
