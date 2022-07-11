<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileFormat extends AbstractTagGroup
{

  protected string $id = 'Sony:FileFormat';

  protected string $name = 'FileFormat';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'File Format',
    'fr' => 'Format de fichier',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Main
       * line : 356341
       * type : int8u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Sony::Main.Sony:FileFormat',
      'desc' => [
        'en' => 'File Format',
        'fr' => 'Format de fichier',
      ],
    ],
  ];

}
