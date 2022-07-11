<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CaptureGammaEquation extends AbstractTagGroup
{

  protected string $id = 'MXF:CaptureGammaEquation';

  protected string $name = 'CaptureGammaEquation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Capture Gamma Equation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168113
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CaptureGammaEquation',
      'desc' => [
        'en' => 'Capture Gamma Equation',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 168116
       * type : rational64s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CaptureGammaEquation',
      'desc' => [
        'en' => 'Capture Gamma Equation',
      ],
    ],
    2 => [
      /**
       * table_name : MXF::Main
       * line : 169368
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:CaptureGammaEquation',
      'desc' => [
        'en' => 'Capture Gamma Equation',
      ],
    ],
  ];

}
