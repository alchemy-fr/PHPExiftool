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
class IntegrationIndication extends AbstractTagGroup
{

  protected string $id = 'MXF:IntegrationIndication';

  protected string $name = 'IntegrationIndication';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Integration Indication',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168454
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:IntegrationIndication',
      'desc' => [
        'en' => 'Integration Indication',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171184
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:IntegrationIndication',
      'desc' => [
        'en' => 'Integration Indication',
      ],
    ],
  ];

}
