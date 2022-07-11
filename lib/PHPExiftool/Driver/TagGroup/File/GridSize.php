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
class GridSize extends AbstractTagGroup
{

  protected string $id = 'File:GridSize';

  protected string $name = 'GridSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Grid Size',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::Main
       * line : 167218
       * type : int32u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'MRC::Main.File:GridSize',
      'desc' => [
        'en' => 'Grid Size',
      ],
    ],
  ];

}
