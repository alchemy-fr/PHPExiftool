<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\LNK;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RunWindow extends AbstractTagGroup
{

  protected string $id = 'LNK:RunWindow';

  protected string $name = 'RunWindow';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Run Window',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::Main
       * line : 161800
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::Main.LNK:RunWindow',
      'desc' => [
        'en' => 'Run Window',
      ],
    ],
  ];

}
