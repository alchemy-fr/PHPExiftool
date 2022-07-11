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
class PublishingRegionName extends AbstractTagGroup
{

  protected string $id = 'MXF:PublishingRegionName';

  protected string $name = 'PublishingRegionName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Publishing Region Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171033
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PublishingRegionName',
      'desc' => [
        'en' => 'Publishing Region Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171036
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PublishingRegionName',
      'desc' => [
        'en' => 'Publishing Region Name',
      ],
    ],
  ];

}
