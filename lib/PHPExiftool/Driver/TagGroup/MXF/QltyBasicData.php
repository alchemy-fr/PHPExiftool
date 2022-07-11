<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class QltyBasicData extends AbstractTagGroup
{

  protected string $id = 'MXF:QltyBasicData';

  protected string $name = 'QltyBasicData';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Qlty Basic Data',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171691
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:QltyBasicData',
      'desc' => [
        'en' => 'Qlty Basic Data',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171694
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:QltyBasicData',
      'desc' => [
        'en' => 'Qlty Basic Data',
      ],
    ],
  ];

}
