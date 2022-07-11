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
class LocalEventEndDateTime extends AbstractTagGroup
{

  protected string $id = 'MXF:LocalEventEndDateTime';

  protected string $name = 'LocalEventEndDateTime';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Local Event End Date Time',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168880
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:LocalEventEndDateTime',
      'desc' => [
        'en' => 'Local Event End Date Time',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171296
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:LocalEventEndDateTime',
      'desc' => [
        'en' => 'Local Event End Date Time',
      ],
    ],
  ];

}
