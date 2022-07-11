<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_header;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RenderingIntent extends AbstractTagGroup
{

  protected string $id = 'ICC-header:RenderingIntent';

  protected string $name = 'RenderingIntent';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Rendering Intent',
    'fr' => 'Intention de rendu',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Header
       * line : 145400
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ICC_Profile::Header.ICC-header:RenderingIntent',
      'desc' => [
        'en' => 'Rendering Intent',
        'fr' => 'Intention de rendu',
      ],
    ],
  ];

}
