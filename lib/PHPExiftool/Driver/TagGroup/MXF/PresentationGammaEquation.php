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
class PresentationGammaEquation extends AbstractTagGroup
{

  protected string $id = 'MXF:PresentationGammaEquation';

  protected string $name = 'PresentationGammaEquation';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Presentation Gamma Equation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169376
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PresentationGammaEquation',
      'desc' => [
        'en' => 'Presentation Gamma Equation',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 169379
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:PresentationGammaEquation',
      'desc' => [
        'en' => 'Presentation Gamma Equation',
      ],
    ],
  ];

}
