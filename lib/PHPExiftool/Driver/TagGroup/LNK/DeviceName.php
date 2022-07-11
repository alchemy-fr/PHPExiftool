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
class DeviceName extends AbstractTagGroup
{

  protected string $id = 'LNK:DeviceName';

  protected string $name = 'DeviceName';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Device Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::LinkInfo
       * line : 161415
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::LinkInfo.LNK:DeviceName',
      'desc' => [
        'en' => 'Device Name',
      ],
    ],
  ];

}
