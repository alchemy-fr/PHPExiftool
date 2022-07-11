<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AutoSaveFilePath extends AbstractTagGroup
{

  protected string $id = 'Photoshop:AutoSaveFilePath';

  protected string $name = 'AutoSaveFilePath';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Auto Save File Path',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 306017
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Photoshop::Main.Photoshop:AutoSaveFilePath',
      'desc' => [
        'en' => 'Auto Save File Path',
      ],
    ],
  ];

}
