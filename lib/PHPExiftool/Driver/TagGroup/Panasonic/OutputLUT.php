<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OutputLUT extends AbstractTagGroup
{

  protected string $id = 'Panasonic:OutputLUT';

  protected string $name = 'OutputLUT';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Output LUT',
  ];

  protected int $count = 0;

  protected int $flags = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Main
       * line : 278204
       * type : ?
       * writable : true
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'Panasonic::Main.Panasonic:OutputLUT',
      'desc' => [
        'en' => 'Output LUT',
      ],
    ],
  ];

}
