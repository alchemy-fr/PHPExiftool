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
class TextualDescriptionKind extends AbstractTagGroup
{

  protected string $id = 'MXF:TextualDescriptionKind';

  protected string $name = 'TextualDescriptionKind';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Textual Description Kind',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170547
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:TextualDescriptionKind',
      'desc' => [
        'en' => 'Textual Description Kind',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170550
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:TextualDescriptionKind',
      'desc' => [
        'en' => 'Textual Description Kind',
      ],
    ],
  ];

}
