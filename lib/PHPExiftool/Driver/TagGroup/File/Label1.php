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
class Label1 extends AbstractTagGroup
{

  protected string $id = 'File:Label1';

  protected string $name = 'Label1';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Label 1',
  ];

  protected int $count = 80;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::Main
       * line : 167328
       * type : string
       * writable : false
       * count : 80
       * flags : 
       */
      'id' => 'MRC::Main.File:Label1',
      'desc' => [
        'en' => 'Label 1',
      ],
    ],
  ];

}
