<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SceneMode extends AbstractTagGroup
{

  protected string $id = 'Sony:SceneMode';

  protected string $name = 'SceneMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Scene Mode',
    'fr' => 'Modes scène',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Main
       * line : 356833
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:SceneMode',
      'desc' => [
        'en' => 'Scene Mode',
        'fr' => 'Modes scène',
      ],
    ],
  ];

}
