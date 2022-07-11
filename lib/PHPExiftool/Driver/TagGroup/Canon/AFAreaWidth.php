<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaWidth extends AbstractTagGroup
{

  protected string $id = 'Canon:AFAreaWidth';

  protected string $name = 'AFAreaWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AF Area Width',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFInfo
       * line : 4065
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::AFInfo.Canon:AFAreaWidth',
      'desc' => [
        'en' => 'AF Area Width',
      ],
    ],
  ];

}
