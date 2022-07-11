<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Stim;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShootingCount extends AbstractTagGroup
{

  protected string $id = 'Stim:ShootingCount';

  protected string $name = 'ShootingCount';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Shooting Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Stim::Main
       * line : 395049
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Stim::Main.Stim:ShootingCount',
      'desc' => [
        'en' => 'Shooting Count',
      ],
    ],
  ];

}
