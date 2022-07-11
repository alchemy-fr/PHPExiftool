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
class NetName extends AbstractTagGroup
{

  protected string $id = 'LNK:NetName';

  protected string $name = 'NetName';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Net Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::LinkInfo
       * line : 161463
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::LinkInfo.LNK:NetName',
      'desc' => [
        'en' => 'Net Name',
      ],
    ],
  ];

}
