<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Radiance;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class View extends AbstractTagGroup
{

  protected string $id = 'Radiance:View';

  protected string $name = 'View';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'View',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Radiance::Main
       * line : 329934
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Radiance::Main.Radiance:View',
      'desc' => [
        'en' => 'View',
      ],
    ],
  ];

}
