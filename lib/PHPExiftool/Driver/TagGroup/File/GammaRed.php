<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GammaRed extends AbstractTagGroup
{

  protected string $id = 'File:GammaRed';

  protected string $name = 'GammaRed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gamma Red',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3430
       * type : fixed32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::Main.File:GammaRed',
      'desc' => [
        'en' => 'Gamma Red',
      ],
    ],
  ];

}
