<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OldXMP extends AbstractTagGroup
{

  protected string $id = 'RIFF:OldXMP';

  protected string $name = 'OldXMP';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Old XMP',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Main
       * line : 328997
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'RIFF::Main.RIFF:OldXMP',
      'desc' => [
        'en' => 'Old XMP',
      ],
    ],
  ];

}
