<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JPSComment extends AbstractTagGroup
{

  protected string $id = 'JPS:JPSComment';

  protected string $name = 'JPSComment';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'JPS Comment',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::JPS
       * line : 152898
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::JPS.JPS:JPSComment',
      'desc' => [
        'en' => 'JPS Comment',
      ],
    ],
  ];

}
