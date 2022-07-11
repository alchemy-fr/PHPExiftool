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
class RedEndpoint extends AbstractTagGroup
{

  protected string $id = 'File:RedEndpoint';

  protected string $name = 'RedEndpoint';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Red Endpoint',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3418
       * type : int32u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'BMP::Main.File:RedEndpoint',
      'desc' => [
        'en' => 'Red Endpoint',
      ],
    ],
  ];

}
