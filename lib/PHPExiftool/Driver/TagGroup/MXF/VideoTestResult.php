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
class VideoTestResult extends AbstractTagGroup
{

  protected string $id = 'MXF:VideoTestResult';

  protected string $name = 'VideoTestResult';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Test Result',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168297
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:VideoTestResult',
      'desc' => [
        'en' => 'Video Test Result',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 168300
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:VideoTestResult',
      'desc' => [
        'en' => 'Video Test Result',
      ],
    ],
  ];

}
