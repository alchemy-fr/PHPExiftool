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
class UTCLastModifyDate extends AbstractTagGroup
{

  protected string $id = 'MXF:UTCLastModifyDate';

  protected string $name = 'UTCLastModifyDate';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'UTC Last Modify Date',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168859
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:UTCLastModifyDate',
      'desc' => [
        'en' => 'UTC Last Modify Date',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172512
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:UTCLastModifyDate',
      'desc' => [
        'en' => 'UTC Last Modify Date',
      ],
    ],
  ];

}
