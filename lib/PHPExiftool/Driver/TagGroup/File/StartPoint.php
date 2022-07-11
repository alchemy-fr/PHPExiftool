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
class StartPoint extends AbstractTagGroup
{

  protected string $id = 'File:StartPoint';

  protected string $name = 'StartPoint';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Start Point',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::Main
       * line : 167215
       * type : int32u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'MRC::Main.File:StartPoint',
      'desc' => [
        'en' => 'Start Point',
      ],
    ],
  ];

}
