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
class WorkingDirectory extends AbstractTagGroup
{

  protected string $id = 'LNK:WorkingDirectory';

  protected string $name = 'WorkingDirectory';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Working Directory',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::Main
       * line : 161902
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::Main.LNK:WorkingDirectory',
      'desc' => [
        'en' => 'Working Directory',
      ],
    ],
  ];

}
