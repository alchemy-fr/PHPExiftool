<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Offset26 extends AbstractTagGroup
{

  protected string $id = 'Nikon:Offset26';

  protected string $name = 'Offset26';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Offset 26',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::ShotInfoZ9
       * line : 209747
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::ShotInfoZ9.Nikon:Offset26',
      'desc' => [
        'en' => 'Offset 26',
      ],
    ],
  ];

}
