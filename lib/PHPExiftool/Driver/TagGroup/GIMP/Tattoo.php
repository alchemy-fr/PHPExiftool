<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIMP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Tattoo extends AbstractTagGroup
{

  protected string $id = 'GIMP:Tattoo';

  protected string $name = 'Tattoo';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tattoo',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GIMP::Main
       * line : 131933
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GIMP::Main.GIMP:Tattoo',
      'desc' => [
        'en' => 'Tattoo',
      ],
    ],
  ];

}
