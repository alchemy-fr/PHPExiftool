<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HandlerDescription extends AbstractTagGroup
{

  protected string $id = 'QuickTime:HandlerDescription';

  protected string $name = 'HandlerDescription';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Handler Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Handler
       * line : 314048
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Handler.QuickTime:HandlerDescription',
      'desc' => [
        'en' => 'Handler Description',
      ],
    ],
  ];

}
