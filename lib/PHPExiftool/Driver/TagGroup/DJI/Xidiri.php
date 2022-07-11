<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DJI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Xidiri extends AbstractTagGroup
{

  protected string $id = 'DJI:Xidiri';

  protected string $name = 'Xidiri';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Xidiri',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : DJI::Info
       * line : 104823
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'DJI::Info.DJI:Xidiri',
      'desc' => [
        'en' => 'Xidiri',
      ],
    ],
  ];

}
