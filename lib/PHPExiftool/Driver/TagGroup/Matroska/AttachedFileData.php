<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AttachedFileData extends AbstractTagGroup
{

  protected string $id = 'Matroska:AttachedFileData';

  protected string $name = 'AttachedFileData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Attached File Data',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 173878
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'Matroska::Main.Matroska:AttachedFileData',
      'desc' => [
        'en' => 'Attached File Data',
      ],
    ],
  ];

}
