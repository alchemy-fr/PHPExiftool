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
class NatureOfPersonality extends AbstractTagGroup
{

  protected string $id = 'MXF:NatureOfPersonality';

  protected string $name = 'NatureOfPersonality';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Nature Of Personality',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167875
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:NatureOfPersonality',
      'desc' => [
        'en' => 'Nature Of Personality',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170355
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:NatureOfPersonality',
      'desc' => [
        'en' => 'Nature Of Personality',
      ],
    ],
  ];

}
