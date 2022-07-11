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
class Contrast extends AbstractTagGroup
{

  protected string $id = 'Canon:Contrast';

  protected string $name = 'Contrast';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Contrast',
    'fr' => 'Contraste',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::CameraInfo1DmkII
       * line : 13473
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkII.Canon:Contrast',
      'desc' => [
        'en' => 'Contrast',
        'fr' => 'Contraste',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::CameraInfo1DmkIIN
       * line : 17715
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraInfo1DmkIIN.Canon:Contrast',
      'desc' => [
        'en' => 'Contrast',
        'fr' => 'Contraste',
      ],
    ],
    2 => [
      /**
       * table_name : Canon::CameraSettings
       * line : 56545
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::CameraSettings.Canon:Contrast',
      'desc' => [
        'en' => 'Contrast',
        'fr' => 'Contraste',
      ],
    ],
  ];

}
