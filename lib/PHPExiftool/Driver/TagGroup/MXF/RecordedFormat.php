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
class RecordedFormat extends AbstractTagGroup
{

  protected string $id = 'MXF:RecordedFormat';

  protected string $name = 'RecordedFormat';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Recorded Format',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169479
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:RecordedFormat',
      'desc' => [
        'en' => 'Recorded Format',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171769
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:RecordedFormat',
      'desc' => [
        'en' => 'Recorded Format',
      ],
    ],
  ];

}
