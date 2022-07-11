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
class UserID extends AbstractTagGroup
{

  protected string $id = 'File:UserID';

  protected string $name = 'UserID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'User ID',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 106275
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'DPX::Main.File:UserID',
      'desc' => [
        'en' => 'User ID',
      ],
    ],
  ];

}
