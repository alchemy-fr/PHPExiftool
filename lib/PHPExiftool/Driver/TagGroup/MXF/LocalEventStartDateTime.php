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
class LocalEventStartDateTime extends AbstractTagGroup
{

  protected string $id = 'MXF:LocalEventStartDateTime';

  protected string $name = 'LocalEventStartDateTime';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Local Event Start Date Time',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168871
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:LocalEventStartDateTime',
      'desc' => [
        'en' => 'Local Event Start Date Time',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171290
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:LocalEventStartDateTime',
      'desc' => [
        'en' => 'Local Event Start Date Time',
      ],
    ],
  ];

}
