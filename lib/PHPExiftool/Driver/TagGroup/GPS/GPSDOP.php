<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSDOP extends AbstractTagGroup
{

  protected string $id = 'GPS:GPSDOP';

  protected string $name = 'GPSDOP';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GPS Dilution Of Precision',
    'fr' => 'Précision de mesure',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GPS::Main
       * line : 132416
       * type : rational64u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'GPS::Main.GPS:GPSDOP',
      'desc' => [
        'en' => 'GPS Dilution Of Precision',
        'fr' => 'Précision de mesure',
      ],
    ],
    1 => [
      /**
       * table_name : H264::MDPM
       * line : 142006
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.GPS:GPSDOP',
      'desc' => [
        'en' => 'GPS Dilution Of Precision',
        'fr' => 'Précision de mesure',
      ],
    ],
  ];

}
