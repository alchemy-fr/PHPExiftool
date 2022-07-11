<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISO extends AbstractTagGroup
{

  protected string $id = 'Sanyo:ISO';

  protected string $name = 'ISO';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'ISO',
    'fr' => 'Sensibilité ISO',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sanyo::MP4
       * line : 336391
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sanyo::MP4.Sanyo:ISO',
      'desc' => [
        'en' => 'ISO',
        'fr' => 'Sensibilité ISO',
      ],
    ],
  ];

}
