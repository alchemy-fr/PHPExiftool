<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MatrixStructure extends AbstractTagGroup
{

  protected string $id = 'QuickTime:MatrixStructure';

  protected string $name = 'MatrixStructure';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Matrix Structure',
  ];

  protected int $count = 9;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::MovieHeader
       * line : 324479
       * type : fixed32s
       * writable : false
       * count : 9
       * flags : 
       */
      'id' => 'QuickTime::MovieHeader.QuickTime:MatrixStructure',
      'desc' => [
        'en' => 'Matrix Structure',
      ],
    ],
  ];

}
