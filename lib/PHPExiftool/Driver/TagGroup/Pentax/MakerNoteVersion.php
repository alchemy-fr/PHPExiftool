<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MakerNoteVersion extends AbstractTagGroup
{

  protected string $id = 'Pentax:MakerNoteVersion';

  protected string $name = 'MakerNoteVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Maker Note Version',
    'fr' => 'Version des informations spécifiques fabricant',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::S1
       * line : 301902
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Pentax::S1.Pentax:MakerNoteVersion',
      'desc' => [
        'en' => 'Maker Note Version',
        'fr' => 'Version des informations spécifiques fabricant',
      ],
    ],
  ];

}
