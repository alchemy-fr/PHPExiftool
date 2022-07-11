<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Attitude extends AbstractTagGroup
{

  protected string $id = 'GoPro:Attitude';

  protected string $name = 'Attitude';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Attitude',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::GPMF
       * line : 139744
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'GoPro::GPMF.GoPro:Attitude',
      'desc' => [
        'en' => 'Attitude',
      ],
    ],
  ];

}
