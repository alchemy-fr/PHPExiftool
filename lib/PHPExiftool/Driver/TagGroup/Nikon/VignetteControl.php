<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VignetteControl extends AbstractTagGroup
{

  protected string $id = 'Nikon:VignetteControl';

  protected string $name = 'VignetteControl';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Vignette Control',
    'fr' => 'Controle du vignettage',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197397
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:VignetteControl',
      'desc' => [
        'en' => 'Vignette Control',
        'fr' => 'Controle du vignettage',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::NCTG
       * line : 203684
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::NCTG.Nikon:VignetteControl',
      'desc' => [
        'en' => 'Vignette Control',
        'fr' => 'Controle du vignettage',
      ],
    ],
  ];

}
