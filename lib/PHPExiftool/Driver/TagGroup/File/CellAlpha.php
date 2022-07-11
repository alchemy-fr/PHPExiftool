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
class CellAlpha extends AbstractTagGroup
{

  protected string $id = 'File:CellAlpha';

  protected string $name = 'CellAlpha';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Cell Alpha',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::Main
       * line : 167240
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MRC::Main.File:CellAlpha',
      'desc' => [
        'en' => 'Cell Alpha',
      ],
    ],
  ];

}
