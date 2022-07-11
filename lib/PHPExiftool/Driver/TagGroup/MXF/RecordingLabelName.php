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
class RecordingLabelName extends AbstractTagGroup
{

  protected string $id = 'MXF:RecordingLabelName';

  protected string $name = 'RecordingLabelName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Recording Label Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170177
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:RecordingLabelName',
      'desc' => [
        'en' => 'Recording Label Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170181
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:RecordingLabelName',
      'desc' => [
        'en' => 'Recording Label Name',
      ],
    ],
  ];

}
