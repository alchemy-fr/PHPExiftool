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
class GreenEndpoint extends AbstractTagGroup
{

  protected string $id = 'File:GreenEndpoint';

  protected string $name = 'GreenEndpoint';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Green Endpoint',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Main
       * line : 3422
       * type : int32u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'BMP::Main.File:GreenEndpoint',
      'desc' => [
        'en' => 'Green Endpoint',
      ],
    ],
  ];

}
