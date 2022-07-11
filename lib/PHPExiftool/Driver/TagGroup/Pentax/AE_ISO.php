<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AE_ISO extends AbstractTagGroup
{

  protected string $id = 'Pentax:AE_ISO';

  protected string $name = 'AE_ISO';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AE ISO',
    'fr' => 'Sensibilité ISO AE',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AEInfo
       * line : 283026
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo.Pentax:AE_ISO',
      'desc' => [
        'en' => 'AE ISO',
        'fr' => 'Sensibilité ISO AE',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::AEInfo2
       * line : 283384
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo2.Pentax:AE_ISO',
      'desc' => [
        'en' => 'AE ISO',
        'fr' => 'Sensibilité ISO AE',
      ],
    ],
    2 => [
      /**
       * table_name : Pentax::AEInfo3
       * line : 283629
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo3.Pentax:AE_ISO',
      'desc' => [
        'en' => 'AE ISO',
        'fr' => 'Sensibilité ISO AE',
      ],
    ],
  ];

}
