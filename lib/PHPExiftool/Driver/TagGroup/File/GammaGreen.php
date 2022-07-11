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
class GammaGreen extends AbstractTagGroup
{

  protected string $id = 'File:GammaGreen';

  protected string $name = 'GammaGreen';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gamma Green',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3434
       * type : fixed32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::Main.File:GammaGreen',
      'desc' => [
        'en' => 'Gamma Green',
      ],
    ],
  ];

}
