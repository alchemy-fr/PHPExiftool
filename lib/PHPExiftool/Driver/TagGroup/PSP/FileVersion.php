<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PSP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileVersion extends AbstractTagGroup
{

  protected string $id = 'PSP:FileVersion';

  protected string $name = 'FileVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File Version',
    'fr' => 'Version de format de fichier',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PSP::Main
       * line : 273736
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PSP::Main.PSP:FileVersion',
      'desc' => [
        'en' => 'File Version',
        'fr' => 'Version de format de fichier',
      ],
    ],
  ];

}
