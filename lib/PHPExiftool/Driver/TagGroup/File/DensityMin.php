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
class DensityMin extends AbstractTagGroup
{

  protected string $id = 'File:DensityMin';

  protected string $name = 'DensityMin';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Density Min',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::Main
       * line : 167291
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MRC::Main.File:DensityMin',
      'desc' => [
        'en' => 'Density Min',
      ],
    ],
  ];

}
