<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HasColorMap extends AbstractTagGroup
{

  protected string $id = 'GIF:HasColorMap';

  protected string $name = 'HasColorMap';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Has Color Map',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GIF::Screen
       * line : 131749
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIF::Screen.GIF:HasColorMap',
      'desc' => [
        'en' => 'Has Color Map',
      ],
    ],
  ];

}
