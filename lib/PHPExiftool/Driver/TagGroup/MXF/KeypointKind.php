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
class KeypointKind extends AbstractTagGroup
{

  protected string $id = 'MXF:KeypointKind';

  protected string $name = 'KeypointKind';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Keypoint Kind',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171099
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:KeypointKind',
      'desc' => [
        'en' => 'Keypoint Kind',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171102
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:KeypointKind',
      'desc' => [
        'en' => 'Keypoint Kind',
      ],
    ],
  ];

}
