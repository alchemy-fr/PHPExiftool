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
class AccessDate extends AbstractTagGroup
{

  protected string $id = 'LNK:AccessDate';

  protected string $name = 'AccessDate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Access Date',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::Main
       * line : 161768
       * type : int64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::Main.LNK:AccessDate',
      'desc' => [
        'en' => 'Access Date',
      ],
    ],
  ];

}
