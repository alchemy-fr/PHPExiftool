<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JVC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MakerNoteVersion extends AbstractTagGroup
{

  protected string $id = 'JVC:MakerNoteVersion';

  protected string $name = 'MakerNoteVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Maker Note Version',
    'fr' => 'Version des informations spécifiques fabricant',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : JVC::Text
       * line : 153888
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'JVC::Text.JVC:MakerNoteVersion',
      'desc' => [
        'en' => 'Maker Note Version',
        'fr' => 'Version des informations spécifiques fabricant',
      ],
    ],
  ];

}
