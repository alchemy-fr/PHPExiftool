<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileInfoVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:FileInfoVersion';

  protected string $name = 'FileInfoVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'File Info Version',
    'fr' => 'Version des Infos Fichier',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FileInfo
       * line : 192652
       * type : undef
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Nikon::FileInfo.Nikon:FileInfoVersion',
      'desc' => [
        'en' => 'File Info Version',
        'fr' => 'Version des Infos Fichier',
      ],
    ],
  ];

}
